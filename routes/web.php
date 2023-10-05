<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController as FrontendController;
use App\Http\Controllers\Backend\HomeController as BackendController;

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



////////*******Auth **********///////

Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

/////////****** Front end*********///////

Route::get('/user', [FrontendController::class, 'index'])->middleware(['auth', 'customer']);



///////*******Back End **********///////

Route::get('/auth', [BackendController::class, 'index'])->middleware(['auth', 'admin']);
