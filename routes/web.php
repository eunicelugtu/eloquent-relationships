<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [ProfileController::class, 'getAllUsers'])->name('getAllUsers');
Route::get('/user/profile/{id}', [UserController::class, 'getProfile'])->name('getProfile');
Route::get('/user/courses/{id}', [UserController::class, 'getCourses'])->name('getCourses');
Route::get('/course/{id}', [CourseController::class, 'getCourseUsers'])->name('getCourseUsers');