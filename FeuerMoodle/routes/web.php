<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseMemberController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return View('login');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('/courses', CourseController::class);
    Route::resource('/users', UserController::class);

    Route::get('/admin', function () {
        return View('adminPage.index');
    });

    Route::get('/user/courses', function () {
        return View('users.courses');
    });

    Route::resource('/courseMembers', CourseMemberController::class);
});

require __DIR__ . '/auth.php';
