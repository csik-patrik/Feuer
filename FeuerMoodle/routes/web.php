<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;


Route::get('/login', function () {
    return View('login');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/profile', function () {
        return View('profiles.profile');
    });
    Route::get('/profile/update', function () {
        return View('profiles.profileUpdate');
    });
    Route::resource('/courses', CourseController::class);
    Route::resource('/users', UserController::class);

    Route::get('/admin', function () {
        return View('adminPage.index');
    });

    Route::get('/user/courses', function () {
        return View('users.courses');
    });
    Route::get('/', function () {
        return View('mainPage.index');
    });
});

require __DIR__ . '/auth.php';
