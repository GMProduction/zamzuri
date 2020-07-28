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

Route::get('/', function () {
    return view('home');
});

Route::get('/detail', function () {
    return view('home');
});

//LOGIN
Route::get('/login', function () {
    return view('login.login');
});

Route::get('/daftaruser', function () {
    return view('login.daftaruser');
});

//ADMIN

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/produk', function () {
    return view('admin.produk.produk');
});

Route::get('/admin/tambahproduk', function () {
    return view('admin.produk.tambahproduk');
});

Route::get('/admin/transaksi', function () {
    return view('admin.transaksi.transaksi');
});

Route::get('/admin/user', function () {
    return view('admin.user.user');
});

Route::get('/admin/transaksi/cetak', 'LaporanController@cetakAdminDataTransaksi')->name('cetakAdminDataTransaksi');
