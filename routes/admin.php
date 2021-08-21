<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->prefix('admin')->middleware(['auth', 'verified', 'employee'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])
        ->name('index');

    Route::get('/kurse', [AdminController::class, 'showCourses'])
        ->name('courses');

    Route::get('/kurs', [CourseController::class, 'create'])
        ->name('course.create');

    Route::get('/kurs/{course}/bearbeiten', [CourseController::class, 'edit'])
        ->name('course.edit');

});
