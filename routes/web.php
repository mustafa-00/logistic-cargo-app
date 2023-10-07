<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\landing\LandingController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Auth::routes();
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login/user', [LoginController::class, 'login'])->name('login.user');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register/user', [RegisterController::class, 'register'])->name('register.user');
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

// lanidng controllers
Route::get('/', [LandingController::class, 'index']);

// Dashboard controllers
Route::get('/', [DashboardController:: class, 'dashboard'])->name('dashboard');
Route::resource('profile', ProfileController::class);
