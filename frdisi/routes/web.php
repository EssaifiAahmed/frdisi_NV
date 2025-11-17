<?php

use App\Http\Controllers\CandidateIncubsController;
use App\Http\Controllers\CondidatureController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Auth::routes();

Route::view('contact', 'contactUs')->name('contactUs');
Route::view('brevet', 'brevets')->name('brevets');
Route::view('incubation', 'projectIncubs')->name('incubation');
Route::post('CondidaProject', [CandidateIncubsController::class, 'InsertCondidaProject'])->name('CondidaProjet');
Route::view('closed', 'closed')->name('closed');
Route::middleware(['isauth'])->group(function () {
    Route::get('/adminpanel', [CandidateIncubsController::class, 'main'])->name('adminpanel');
    Route::get('/candidate/detail/{id}', [CandidateIncubsController::class, 'showCandidateDetail'])->name('candidate.detail');
    Route::post('/candidate/update/{id}', [CandidateIncubsController::class, 'findCandidateDetail'])->name('candidate.update');
    Route::get('/candidate/project', [CandidateIncubsController::class, 'getDataIncubs'])->name('candidate.project');
    Route::get('/download-zipped-folder/{nom}/{prenom}/{cin}', [CandidateIncubsController::class, 'downloadZippedFolder'])->name('download.zipped-folder');
    //---------------------------------------------- Routes for Doctoral Candidature ------------------------------------------------//
    Route::get('/doctorat/candidature/data', [CondidatureController::class, 'getData'])->name('candidate.doctorat');
    Route::get('/doctorat/candidature/download-zipped-folder/{nom}/{prenom}', [CondidatureController::class, 'downloadZippedFolder'])->name('doctorat.candidature.downloadZippedFolder');

});
