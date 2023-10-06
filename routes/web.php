<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\landing\LandingController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProfileController;

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

Auth::routes();

// lanidng controllers
Route::get('/', [LandingController::class, 'index']);

// Dashboard controllers
Route::get('/', [DashboardController:: class, 'dashboard'])->name('dashboard');
Route::resource('profile', ProfileController::class);
