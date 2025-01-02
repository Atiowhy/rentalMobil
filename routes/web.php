<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\carUserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditProfile;
use App\Http\Controllers\frontController;
use App\Http\Controllers\LevelsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginCustomerController;
use App\Http\Controllers\OrderUser;
use App\Http\Controllers\RegisCustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransAdmin;
use App\Http\Controllers\TransOrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'index'])->name('/');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('actionRegis', [RegisterController::class, 'actionRegis'])->name('actionRegis');
Route::get('loginCust', [LoginCustomerController::class, 'index'])->name('loginCust');
Route::post('actionLoginCust', [LoginCustomerController::class, 'actionLoginCustomer'])->name('actionLoginCust');
Route::get('regisCustomer', [RegisCustomerController::class, 'index'])->name('regisCustomer');
Route::post('actionRegisCustomer', [RegisCustomerController::class, 'regisCustomer'])->name('actionRegisCustomer');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('logoutCust', [CustomerController::class, 'logoutCust'])->name('logoutCust');
    
// route middleware
Route::middleware(['auth'])->group(function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('level', LevelsController::class);
    Route::resource('user', UserController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('car', CarController::class);
});

Route::resource('front', frontController::class);
Route::resource('carData', carUserController::class);
Route::resource('order', TransOrderController::class);
Route::resource('admTrans', TransAdmin::class);
Route::resource('orderUser', OrderUser::class);
Route::resource('editProfile', EditProfile::class);