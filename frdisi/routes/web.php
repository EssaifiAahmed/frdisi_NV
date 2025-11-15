<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateIncubsController;

Route::get('/', function () {
    return view('home');
})->name('home');

Auth::routes();

Route::view('contact', 'contactUs')->name('contactUs');
Route::view('brevet', 'brevets')->name('brevets');
Route::view('incubation', 'projectIncubs')->name('incubation');

Route::middleware(['isauth'])->group(function () {
    Route::get('/adminpanel', [CandidateIncubsController::class, 'main'])->name('adminpanel');
    Route::get('/candidate/detail/{id}', [CandidateIncubsController::class, 'showCandidateDetail'])->name('candidate.detail');
    Route::post('/candidate/update/{id}', [CandidateIncubsController::class, 'findCandidateDetail'])->name('candidate.update');
    Route::post('/candidate/checkhome', [CandidateIncubsController::class, 'CheckUserBackHome'])->name('candidate.checkhome');
});
