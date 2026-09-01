<?php

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
Route::get('/register',[FrontendController::class, 'register']);
Route::get('/login', [FrontendController::class, 'login']);