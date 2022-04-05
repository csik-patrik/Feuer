<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;

Route::post('loginAuth', [AuthController::class, 'login'])->name('login.auth');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('main', [AuthController::class, 'showMainPage'])->name('main');

Route::resource('/courses', CourseController::class);
Route::resource('/users', UserController::class);

Route::get('/admin', function () {
    return View('adminPage.index');
});
