<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController as FrontendController;
use App\Http\Controllers\Backend\MobilController;
use App\Http\Controllers\Frontend\PeminjamanController as FrontpinjamController;
use App\Http\Controllers\Backend\PinjamController;
use App\Http\Controllers\Backend\SopirController;
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


//**********************************Auth ***************************/

Route::get('/log', [AuthController::class, 'index'])->name('login');
Route::post('/log', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'index_reg']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');


//******************************** FRONTEND*************************/
// Route::get('/', [FrontendController::class, 'homepage'])->name('homepage');
Route::get('/', [FrontendController::class, 'index']);

//pages
Route::get('/tentang', [FrontendController::class, 'tentangKami']);
Route::get('/syarat', [FrontendController::class, 'syaratKetentuan']);
Route::get('/kontak', [FrontendController::class, 'kontak']);
//katalog
Route::get('/katalog', [KatalogController::class, 'index']);
Route::get('/detail/{id}', [FrontendController::class, 'detailMobil'])->name('detail')->middleware(['auth', 'customer']);
//peminjaman
Route::get('/peminjaman/{id}', [FrontpinjamController::class, 'pinjam'])->name('peminjaman')->middleware(['auth', 'customer']);
Route::post('/peminjaman', [FrontpinjamController::class, 'peminjaman']);

//***************************Pembayaran */
Route::post('/update-pembayaran', [PembayaranController::class, 'update_pembayaran']);
//pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');



//********************************BACK END **************************/

//****************************ADMIN */
Route::get('/auth', [AdminController::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/add-admin', [AdminController::class, 'useradmin'])->middleware(['auth', 'admin']);

// Profile
Route::get('/profile', [AdminController::class, 'profile']);

// CRUD Admin
Route::get('/create', [AdminController::class, 'create_admin'])->middleware(['auth', 'admin']);
Route::post('/create', [AdminController::class, 'add']);

Route::get('/edit', [AdminController::class, 'change']);
Route::post('/update-admin', [AdminController::class, 'update_admin']);

Route::post('/delete/{id}', [AdminController::class, 'delete'])->name('delete');

//***************************Customer */

Route::get('/add-customer', [CustomerController::class, 'usercustomer'])->middleware(['auth', 'admin']);
//Show
Route::get('/show/{id}', [CustomerController::class, 'show'])->name('show');

//Delete customer
Route::post('/delete-customer/{id}', [CustomerController::class, 'customer_delete'])->name('delete-customer');


//**************************Sopir */

Route::get('/add-sopir', [SopirController::class, 'usersopir'])->middleware(['auth', 'admin']);
//Crud Sopir
Route::get('/create-sopir', [SopirController::class, 'create_sopir'])->middleware(['auth', 'admin']);
Route::post('/create-sopir', [SopirController::class, 'add_sopir']);

//*************************Mobil */
// Data Mobil
Route::get('/data-mobil', [MobilController::class, 'mobil']);
//status mobil
Route::get('mobil/{id}', [MobilController::class, 'update_status']);

//Create Mobil
Route::get('/create-mobil', [MobilController::class, 'create']);
Route::post('/create-mobil', [MobilController::class, 'add_mobil']);

//Edit Mobil
Route::get('/edit-mobil/{id}', [MobilController::class, 'edit_mobil'])->name('edit-mobil');
Route::post('/update-mobil', [MobilController::class, 'update_mobil'])->name('mobil.update');

//Show Mobil
Route::get('/show-mobil/{id}', [MobilController::class, 'show_mobil'])->name('show-mobil');

//Delete Mobil
Route::post('/delete-mobil/{id}', [MobilController::class, 'mobil_delete'])->name('delete-mobil');


//***************************Peminjaman */

Route::get('/data-pinjam', [PinjamController::class, 'index']);
//update status pinjam

Route::get('/pinjam/{id}', [PinjamController::class, 'edit_peminjaman'])->name('edit');
Route::post('/update', [PinjamController::class, 'update_peminjaman'])->name('update');

//bukti_transfer
Route::get('/bukti/{id}', [PinjamController::class, 'bukti_bayar'])->name('bukti');
