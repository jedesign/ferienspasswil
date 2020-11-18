<?php

use Illuminate\Support\Facades\Route;

Route::name('dashboard.')->prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', ['App\Http\Controllers\DashboardController', 'index'])
        ->name('index');
    Route::get('/profil', ['App\Http\Controllers\GuardianController', 'edit'])
        ->name('profile');
});
