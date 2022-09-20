<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home-page');
});

Route::get('/homeAfter', function () {
    return view('homeAfter');
});

Route::get('/login', function () {
    return view('login-page');
});

Route::get('/signUp', function () {
    return view('signUp-page');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/profile', function () {
    return view('profile-page');
});