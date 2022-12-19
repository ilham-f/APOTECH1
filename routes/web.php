<?php

use Illuminate\Support\Facades\Route;
use App\Models\Obat;
use App\Models\Category;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\CategoryController;
<<<<<<< Updated upstream
=======
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\PesananResepController;
>>>>>>> Stashed changes

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

Route::get('/', function () {
    return view('user.home-page', [
        'title' => 'Home',
        'categories' => Category::all(),
        'obats' => Obat::all()
    ]);
});

Route::get('/homeAfter', function () {
    return view('user.homeAfter', [
        'title' => 'HomeAfter',
        'categories' => Category::all(),
        'obats' => Obat::all()
    ]);
});

Route::get('/login', function () {
    return view('user.login-page', [
        'title' => 'Login'
    ]);
});

Route::get('/signUp', function () {
    return view('user.signUp-page', [
        'title' => 'signUp'
    ]);
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/profile', function () {
    return view('user.profile-page', [
        'title' => 'Profile'
    ]);
});

Route::get('/ubahpwd', function () {
    return view('user.ubahpassword', [
        'title' => 'Profile'
    ]);
});

Route::get('/rwytpmblian', function () {
    return view('user.riwayatpembelian', [
        'title' => 'Profile'
    ]);
});

<<<<<<< Updated upstream
Route::get('/kirimresep', function () {
    return view('user.kirimresep', [
        'title' => 'Kirim Resep'
    ]);
=======
// User Regis
Route::get('/regis', [RegisterController::class, 'index']);
Route::post('/regis', [RegisterController::class, 'store']);

// Admin Logout
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
        Route::get('/tambahkeluhan', [AdminController::class, 'tambahkeluhan']);
        Route::get('/admin', [TransaksiController::class, 'getSumTransaksi']);
        Route::get('/riwayat', [TransaksiController::class, 'indexadmin']);
        Route::get('riwayat/{transaksi:id}', [TransaksiController::class, 'showadmin']);
        Route::get('/resep', [ResepController::class, 'index']);
        Route::get('/pesananresep', [PesananResepController::class, 'index']);
        Route::get('pesananresep/{pesananResep:id}', [PesananResepController::class, 'show']);
        Route::get('resep/{resep:id}', [ResepController::class, 'show']);
        Route::post('update-stat', [TransaksiController::class, 'updateStatTransaksi'])->name('transac.statup');
        Route::post('psnrsp-stat', [PesananResepController::class, 'updateStatPesananResep'])->name('psnrsp.statup');
        Route::post('buatpesanan', [PesananResepController::class, 'store'])->name('buatpesanan');
        Route::get('/buatpesananresep', [ResepController::class, 'indexbuat']);
        // Route::get('image/{pembayaran:bukti_bayar}', [ImageController::class, 'index']);
        // Route::get('/exportspembayaran', [PembayaranExportController::class, 'pembayaranExport']);
    });

    // Halaman yang bisa diakses oleh Customer
    Route::group(['middleware' => 'cekrole:customer'], function() {
        Route::get('/afterpmblian', [TransaksiController::class, 'after'])->name('after');
        Route::get('/kirimresep', [UserController::class, 'resep']);
        Route::get('/profile', [UserController::class, 'profile']);
        Route::get('/ubahpwd', [UserController::class, 'ubahpw']);
        Route::get('/rwytpmblian', [TransaksiController::class, 'index']);
        Route::get('/keranjang', [CartController::class, 'index'])->name('cart.list');
        Route::post('/detailproduk', [CartController::class, 'addToCart'])->name('cart.store');
        Route::post('cart-remove', [CartController::class, 'removeCart'])->name('cart.remove');
        Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
        Route::post('/keranjang', [TransaksiController::class, 'buat'])->name('transaksi.store');
        Route::get('pembelian/{transaksi:id}', [TransaksiController::class, 'show']);
        Route::post('cart-clear', [CartController::class, 'clearCart'])->name('cart.clear');
        // Route::get('image/{pembayaran:bukti_bayar}', [ImageController::class, 'index']);
        // Route::get('/exportspembayaran', [PembayaranExportController::class, 'pembayaranExport']);
    });
>>>>>>> Stashed changes
});

Route::get('/keranjang', function () {
    return view('user.keranjang', [
        'title' => 'Keranjang'
    ]);
});

Route::get('/produk', [ObatController::class, 'index']);

Route::get('produk/{obat:slug}', [ObatController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('categories/{category:slug}', [CategoryController::class, 'show']);
