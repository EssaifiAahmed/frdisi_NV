<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('home');
})->name('home');

Auth::routes();

Route::view('contact', 'contactUs')->name('contactUs');
Route::view('brevet', 'brevets')->name('brevets');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::middleware('auth')->group(function () {
    Route::get('/adminpanel', [LoginController::class, 'main'])->name('adminpanel');
    Route::get('/candidate/detail/{id}', [LoginController::class, 'showCandidateDetail'])->name('candidate.detail');
    Route::post('/candidate/update/{id}', [LoginController::class, 'findCandidateDetail'])->name('candidate.update');
    Route::post('/candidate/checkhome', [LoginController::class, 'CheckUserBackHome'])->name('candidate.checkhome');
});





// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
