<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index']);
Route::get('/lichence-verify', [FrontendController::class, 'lichenceVerify']);
Route::get('/benefits', [FrontendController::class, 'benefits']);
Route::get('/guidelines', [FrontendController::class, 'guidelines']);
Route::get('/faq', [FrontendController::class, 'faq']);

//Register...
Route::get('/drivers-register',[FrontendController::class, 'driversRegister']);
Route::get('/drivers-login', [FrontendController::class, 'driversLogin']);

//admin login...
Route::get('/admin/login', [FrontendController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin/logout', [FrontendController::class, 'adminLogout'])->name('admin.logout');

Auth::routes();

Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard']);
