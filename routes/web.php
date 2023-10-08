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
Route::get('/log', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/log', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

/////////****** Front end*********///////
Route::get('/', function () {
    return view('frontend.homepage');
});
Route::get('/user', [FrontendController::class, 'index'])->middleware(['auth', 'customer']);



///////*******Back End **********///////
// Route::get('/', function () {
//     return view('');
// });


Route::get('/auth', [BackendController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/add-admin', [BackendController::class, 'useradmin'])->middleware(['auth', 'admin']);
Route::get('/add-customer', [BackendController::class, 'usercustomer'])->middleware(['auth', 'admin']);

// Profile
Route::get('/profile', [BackendController::class, 'profile']);


// CRUD Admin
//Create
Route::get('/create', [BackendController::class, 'create_admin'])->middleware(['auth', 'admin']);
Route::post('/create', [BackendController::class, 'add']);

//Edit
Route::get('/edit', [BackendController::class, 'change']);
Route::post('/update', [BackendController::class, 'update']);

//Delete
Route::post('/delete/{id}', [BackendController::class, 'delete']);
// CRUD Customer

Route::get('/create-customer', [BackendController::class, 'create_customer'])->middleware(['auth', 'admin']);
Route::post('/create-customer', [BackendController::class, 'add_customer']);
