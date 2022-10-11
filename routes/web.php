<?php

use Illuminate\Support\Facades\Route;
use App\Models\Obat;
use App\Models\Category;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\CategoryController;

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

Route::get('/kirimresep', function () {
    return view('user.kirimresep', [
        'title' => 'Kirim Resep'
    ]);
});

Route::get('/keranjang', function () {
    return view('user.keranjang', [
        'title' => 'Keranjang'
    ]);
});

Route::get('/tabelobat', function () {
    return view('admin.obat', [
        'title' => 'Tabel Obat',
        'obats' => Obat::all()
    ]);
});

Route::get('/tambahobat', function () {
    return view('admin.tambahobat', [
        'title' => 'Tambah Obat',
        'categories' => Category::all()
    ]);
});


Route::get('/produk', [ObatController::class, 'index']);

Route::get('produk/{obat:slug}', [ObatController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('categories/{category:slug}', [CategoryController::class, 'show']);
