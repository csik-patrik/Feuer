<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return View('login');
});
Route::get('/profile', function () {
    return View('profile');
});


Route::middleware(['auth'])->group(function () {
    Route::resource('/courses', CourseController::class);
    Route::resource('/users', UserController::class);
    Route::get('/admin', function () {
        return View('adminPage.index');
    });
});

require __DIR__ . '/auth.php';
