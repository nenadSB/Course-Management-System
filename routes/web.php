<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\TraineeController;

// Authentication routes
Auth::routes();

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes accessible to all authenticated users
Route::middleware('auth')->group(function () {
    Route::resource('courses', CourseController::class);
    Route::get('/trainer-dashboard', [TrainerController::class, 'dashboard']);
    Route::get('/trainee-dashboard', [TraineeController::class, 'dashboard']);
});