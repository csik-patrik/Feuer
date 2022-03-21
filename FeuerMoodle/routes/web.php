<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('loginAuth', [AuthController::class, 'login'])->name('login.auth');
Route::get('main', [AuthController::class, 'showMainPage'])->name('main');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('/courses', CourseController::class);

