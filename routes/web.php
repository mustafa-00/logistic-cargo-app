<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\landing\LandingController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\EmployeController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\warehouses\Warehouse1Controller;
use App\Http\Controllers\admin\warehouses\Warehouse2Controller;
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

// lanidng controllers
Route::get('/', [LandingController::class, 'index']);

// Dashboard controllers
Route::resource('profile', ProfileController::class);
Route::post('change_password/{id}', [ProfileController::class, 'change'])->name('change');
Route::resource('employe', EmployeController::class);
Route::resource('warehouse1', Warehouse1Controller::class);
Route::resource('warehouse2', Warehouse2Controller::class);
Route::resource('product', ProductController::class);
Route::resource('order', OrderController::class);

Auth::routes();
Route::get('/dashboard', [DashboardController:: class, 'dashboard'])->name('dashboard');
