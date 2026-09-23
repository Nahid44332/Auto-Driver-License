<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\DriverAuthController;
use App\Http\Controllers\Driver\DriverDashboardController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Frontend Routes (Public)
|--------------------------------------------------------------------------
*/
Route::get('/', [FrontendController::class, 'index']);
Route::get('/lichence-verify', [FrontendController::class, 'lichenceVerify']);
Route::get('/benefits', [FrontendController::class, 'benefits']);
Route::get('/guidelines', [FrontendController::class, 'guidelines']);
Route::get('/faq', [FrontendController::class, 'faq']);


/*
|--------------------------------------------------------------------------
| Driver Guest Routes (Unauthenticated)
|--------------------------------------------------------------------------
*/
Route::middleware(['guest:driver'])->group(function () {
    Route::get('/drivers-register', [DriverAuthController::class, 'driversRegister'])->name('driver.register');
    Route::post('/drivers-register', [DriverAuthController::class, 'register'])->name('driver.register.submit');

    Route::get('/drivers-login', [FrontendController::class, 'driversLogin'])->name('driver.login');
    Route::post('/driver-login', [DriverAuthController::class, 'loginSubmit'])->name('login.submit');
});


/*
|--------------------------------------------------------------------------
| Driver Authenticated Routes
|--------------------------------------------------------------------------
*/
Route::prefix('driver')->name('driver.')->middleware(['auth:driver'])->group(function () {
    Route::get('dashboard', [DriverDashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [DriverDashboardController::class, 'profile'])->name('profile');
    Route::post('profile/update', [DriverDashboardController::class, 'profileUpdate'])->name('profile.update');
    Route::post('logout', [DriverAuthController::class, 'logout'])->name('logout');
});


/*
|--------------------------------------------------------------------------
| Admin Guest & Auth Routes
|--------------------------------------------------------------------------
*/
// যদি অ্যাডমিনের জন্য আলাদা লগইন পেজ ও লজিক থাকে, সেগুলো এখানে রাখতে পারিস
Route::get('/admin/login', [FrontendController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin/logout', [FrontendController::class, 'adminLogout'])->name('admin.logout');

// সুরক্ষিত অ্যাডমিন প্যানেল রাউটগুলো (মিডেলওয়ার সহ)
Route::prefix('admin')->name('admin.')->middleware(['auth:web'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('dashboard');
    Route::get('/drivers', [AdminController::class, 'driverList'])->name('drivers.index');
});

// ডিফল্ট লারাভেল অথ রাউট (যদি দরকার হয়)
Auth::routes();