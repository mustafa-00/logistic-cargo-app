<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\landing\LandingController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\employes\EmployeoverviewController;
use App\Http\Controllers\admin\InvoiceController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\WarehouseController;
use App\Http\Controllers\admin\ZonesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Website_Custom\CalltoactionController;

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
Route::get('home', [LandingController::class, 'index'])->name('home');
Route::get('about', [LandingController::class, 'about'])->name('about');
Route::get('services', [LandingController::class, 'services'])->name('services');
Route::get('contact', [LandingController::class, 'contact'])->name('contact');

/* Dashboard controllers */
Route::resource('profile', ProfileController::class);
Route::post('change_password/{id}', [ProfileController::class, 'change'])->name('change');
Route::resource('employe_overview', EmployeoverviewController::class);
Route::resource('product', ProductController::class);
Route::resource('order', OrderController::class);
Route::resource('invoice', InvoiceController::class);
Route::resource('zone', ZonesController::class);
Route::resource('warehouse', WarehouseController::class);
//website customization routes
Route::resource('calltoaction', CalltoactionController::class );



Auth::routes();
Route::get('/dashboard', [DashboardController:: class, 'dashboard'])->name('dashboard');
