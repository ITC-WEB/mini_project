<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController as FrontendController;
use App\Http\Controllers\Backend\HomeController as BackendController;
use App\Http\Controllers\Backend\MobilController as MobilController;
use App\Http\Controllers\Frontend\PeminjamanController as FrontpinjamController;
use App\Http\Controllers\Backend\PinjamController;
use App\Http\Controllers\Frontend\DetailController;
use App\Http\Controllers\Frontend\KatalogController;
use App\Http\Controllers\Frontend\PembayaranController;

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
Route::get('/register', [AuthController::class, 'index_reg']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

/////////****** Front end*********///////
Route::get('/', [FrontendController::class, 'homepage'])->name('homepage');
Route::get('/user', [FrontendController::class, 'index'])->middleware(['auth', 'customer']);

//pages
Route::get('/tentang', [FrontendController::class, 'tentangKami']);
Route::get('/syarat', [FrontendController::class, 'syaratKetentuan']);
Route::get('/kontak', [FrontendController::class, 'kontak']);
//katalog
Route::get('/katalog', [KatalogController::class, 'index']);
Route::get('/detail', [DetailController::class, 'detail'])->name('detail');
//peminjaman
Route::get('/peminjaman/{id}', [FrontpinjamController::class, 'pinjam'])->name('peminjaman');
Route::post('/peminjaman', [FrontpinjamController::class, 'peminjaman']);
//pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index']);




///////*******Back End **********///////

Route::get('/auth', [BackendController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/add-customer', [BackendController::class, 'usercustomer'])->middleware(['auth', 'admin']);
Route::get('/add-admin', [BackendController::class, 'useradmin'])->middleware(['auth', 'admin']);
Route::get('/add-sopir', [BackendController::class, 'usersopir'])->middleware(['auth', 'admin']);

// Profile
Route::get('/profile', [BackendController::class, 'profile']);


// CRUD Admin
//Create
Route::get('/create', [BackendController::class, 'create_admin'])->middleware(['auth', 'admin']);
Route::post('/create', [BackendController::class, 'add']);

//Edit
Route::get('/edit', [BackendController::class, 'change']);
Route::post('/update', [BackendController::class, 'update']);

//Show
Route::get('/show/{id}', [BackendController::class, 'show'])->name('show');


//Edit Mobil
Route::get('/edit-mobil/{id}', [MobilController::class, 'edit_mobil'])->name('edit-mobil');
Route::post('/update-mobil', [MobilController::class, 'update_mobil'])->name('mobil.update');

//Delete admin
Route::post('/delete/{id}', [BackendController::class, 'delete']);

//Delete customer
Route::post('/delete-customer/{id}', [BackendController::class, 'customer_delete']);

//Delete Mobil
Route::post('/delete-mobil/{id}', [MobilController::class, 'mobil_delete']);

//Crud Sopir
Route::get('/create-sopir', [BackendController::class, 'create_sopir'])->middleware(['auth', 'admin']);
Route::post('/create-sopir', [BackendController::class, 'add_sopir']);

// Data Mobil
Route::get('/data-mobil', [MobilController::class, 'mobil']);

//Crud Mobil
Route::get('/create-mobil', [MobilController::class, 'create']);
Route::post('/create-mobil', [MobilController::class, 'add_mobil']);

// Peminjaman

Route::get('/data-pinjam', [PinjamController::class, 'index']);