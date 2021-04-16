<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')
    ->name('home');

Route::get('/kurse', [CourseController::class, 'index'])->name('course.index');
