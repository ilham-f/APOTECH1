<?php

use Illuminate\Support\Facades\Route;
use App\Models\Obat;
use App\Models\Category;
use App\Models\Keluhan;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\CartController;
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

Route::get('/', [ObatController::class, 'home']);

Route::get('/homeAfter', [ObatController::class, 'home']);

Route::get('/login', function () {
    return view('user.login-page', [
    ]);
});

Route::get('/signUp', function () {
    return view('user.signUp-page', [
    ]);
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/profile', function () {
    return view('user.profile-page', [
    ]);
});

Route::get('/ubahpwd', function () {
    return view('user.ubahpassword', [
    ]);
});

Route::get('/rwytpmblian', function () {
    return view('user.riwayatpembelian', [
    ]);
});

Route::get('/kirimresep', function () {
    return view('user.kirimresep', [
    ]);
});


Route::get('/tabelobat', function () {
    return view('admin.obat', [
        'obats' => Obat::all()
    ]);
});

Route::get('/tambahobat', function () {
    return view('admin.tambahobat', [
        'categories' => Category::all()
    ]);
});
Route::get('/tabelkategori', function () {
    return view('admin.kategori',[
        'categories' => Category::all()
    ]);
});

Route::get('/tambahkategori', function () {
    return view('admin.tambahkategori');
});
Route::get('/tabelkategori', function () {
    return view('admin.kategori',[
        'categories' => Category::all()
    ]);
});

Route::get('/tambahkategori', function () {
    return view('admin.tambahkategori');
});
Route::get('/tabelkeluhan', function () {
    return view('admin.keluhan',[
        'keluhans' => Keluhan::all()
    ]);
});

Route::get('/tambahkeluhan', function () {
    return view('admin.tambahkeluhan');
});

Route::get('/keranjang', [CartController::class, 'index']);

Route::get('/produk', [ObatController::class, 'index']);

Route::get('produk/{obat:slug}', [ObatController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('categories/{category:slug}', [CategoryController::class, 'show']);
