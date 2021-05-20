<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')
    ->name('home');

Route::get('/kurse', [CourseController::class, 'index'])->name('course.index');
Route::get('/kurse/{course:slug}', [CourseController::class, 'show'])->name('course.show');
