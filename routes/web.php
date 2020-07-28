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

Route::get('/', 'Main\MainController@index');

Route::get('/product/{id}', 'Main\MainController@detail');

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

Route::get('/admin/produk', 'Admin\ProdukController@index');
Route::post('/admin/produk/hapus/{id}', 'Admin\ProdukController@hapus');

Route::get('/admin/tambahproduk', function () {
    return view('admin.produk.tambahproduk');
});
Route::post('/admin/tambahproduk', 'Admin\ProdukController@addForm');
Route::get('/admin/editproduk/{id}', 'Admin\ProdukController@editForm');
Route::post('/admin/editproduk/{id}', 'Admin\ProdukController@editForm');

Route::get('/admin/transaksi', function () {
    return view('admin.transaksi.transaksi');
});

Route::get('/admin/detailtransaksi', function () {
    return view('admin.transaksi.detailTransaksi');
});

Route::get('/admin/user', function () {
    return view('admin.user.user');
});

Route::get('/admin/transaksi/cetak', 'LaporanController@cetakAdminDataTransaksi')->name('cetakAdminDataTransaksi');
