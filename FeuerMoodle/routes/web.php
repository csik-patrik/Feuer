<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;

Route::get('main', [AuthController::class, 'showMainPage'])->name('main');

Route::resource('/courses', CourseController::class);
Route::resource('/users', UserController::class);

Route::get('/admin', function () {
    return View('adminPage.index');
});

require __DIR__ . '/auth.php';
