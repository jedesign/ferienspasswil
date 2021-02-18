<?php

use Illuminate\Support\Facades\Route;

Route::name('admin.')->prefix('admin')->middleware(['auth', 'verified', 'employee'])->group(function () {
    Route::get('/', ['App\Http\Controllers\AdminController', 'index'])
        ->name('index');
});
