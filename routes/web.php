<?php

use Illuminate\Support\Facades\Route;
use App\Models\Obat;
use App\Models\Category;
use App\Models\Keluhan;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Customer tanpa login
Route::get('/', [HomeController::class, 'index']);
Route::get('/produk', [ObatController::class, 'index']);
Route::get('produk/{obat:slug}', [ObatController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('categories/{category:slug}', [CategoryController::class, 'show']);

// User Regis
Route::get('/regis', [RegisterController::class, 'index']);
Route::post('/regis', [RegisterController::class, 'store']);

// Admin Login-Logout
// Route::get('/login', [AdminLoginController::class, 'index']);
// Route::post('/login', [AdminLoginController::class, 'authenticate']);
Route::post('/admin-logout', [AdminLoginController::class, 'logout']);

// Customer Login-Logout
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Middleware cek role
Route::group(['middleware' => 'auth'], function() {

    // Halaman yang bisa diakses oleh Admin
    Route::group(['middleware' => 'cekrole:admin'], function() {
        Route::get('/admin', [AdminController::class, 'index']);
        Route::get('/tabelobat', [AdminController::class, 'tabelobat']);
        Route::get('/tambahobat', [AdminController::class, 'tambahobat']);
        Route::get('/tabelkategori', [AdminController::class, 'tabelkategori']);
        Route::get('/tambahkategori', [AdminController::class, 'tambahkategori']);
        Route::get('/tabelkeluhan', [AdminController::class, 'tabelkeluhan']);
        Route::get('/tambahkeluhan', [AdminController::class, 'tambahkeluhanindex']);
        // Route::get('image/{pembayaran:bukti_bayar}', [ImageController::class, 'index']);
        // Route::get('/exportspembayaran', [PembayaranExportController::class, 'pembayaranExport']);
    });

    // Halaman yang bisa diakses oleh Customer
    Route::group(['middleware' => 'cekrole:customer'], function() {
        Route::get('/kirimresep', [HomeController::class, 'resep']);
        Route::get('/profile', [HomeController::class, 'profile']);
        Route::get('/ubahpwd', [HomeController::class, 'ubahpw']);
        Route::get('/rwytpmblian', [HomeController::class, 'riwayatbeli']);
        Route::get('/keranjang', [CartController::class, 'index']);
        // Route::get('image/{pembayaran:bukti_bayar}', [ImageController::class, 'index']);
        // Route::get('/exportspembayaran', [PembayaranExportController::class, 'pembayaranExport']);
    });

});
