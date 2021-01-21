<?php

use Illuminate\Support\Facades\Route;

Route::name('dashboard.')->prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', ['App\Http\Controllers\DashboardController', 'index'])
        ->name('index');

    Route::get('/profil', ['App\Http\Controllers\GuardianController', 'edit'])
        ->name('profile');

    Route::get('/sja', ['App\Http\Controllers\GuardianController', 'editSja'])
        ->name('sja');

    Route::get('/kind', ['App\Http\Controllers\ParticipantController', 'create'])
        ->name('participant.create');

    Route::get('/kind/{participant}', ['App\Http\Controllers\ParticipantController', 'edit'])
        ->name('participant.edit');

    Route::delete('/kind/{participant}', ['App\Http\Controllers\ParticipantController', 'delete'])
        ->name('participant.delete');
});

Route::name('admin.')->prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', ['App\Http\Controllers\AdminController', 'index'])
        ->name('index');
});
