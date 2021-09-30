<?php

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
    return view('home');
});

Route::get('/bayar', function () {
    return view('bayar');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin', function () {
    return view('admin.index');
});