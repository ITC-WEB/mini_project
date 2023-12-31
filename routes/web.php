<?php

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

Route::get('/', function () {
    return view('welcome');
});

////////*******Login **********///////

Route::get('/', function () {
    return view('login');
});

/////////****** Front end*********///////

Route::get('/user', [FrontendController::class, 'index']);



///////*******Back End **********///////

Route::get('/auth', [BackendController::class, 'index']);
