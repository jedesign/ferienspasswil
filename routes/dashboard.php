<?php

use App\Http\Controllers\GuardianController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ParticipantController;
use Illuminate\Support\Facades\Route;

Route::name('dashboard.')->prefix('dashboard')->middleware(['auth', 'verified', 'guardian'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('index');

    Route::get('/profil', [GuardianController::class, 'edit'])
        ->name('profile');

    Route::get('/sozialedienste', [GuardianController::class, 'editSocialServiceState'])
        ->name('socialservice');

    Route::get('/kind', [ParticipantController::class, 'create'])
        ->name('participant.create');

    Route::get('/kind/{participant}/bearbeiten', [ParticipantController::class, 'edit'])
        ->name('participant.edit');

    Route::delete('/kind/{participant}', [ParticipantController::class, 'delete'])
        ->name('participant.delete');
});
