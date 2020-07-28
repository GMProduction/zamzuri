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
Route::post('/ajax/addToCart', 'Main\TransactionController@addToCart');
Route::get('/cart', 'Main\TransactionController@cartPage');


Route::get('/payment', function () {
    return view('payment');
});

//LOGIN
Route::get('/login', 'Auth\AuthController@pageLogin');
Route::post('/post-login', 'Auth\AuthController@login');

Route::get('/register', 'Auth\AuthController@index');
Route::post('/post-register', 'Auth\AuthController@register');

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

Route::get('/admin/transaksi', 'Admin\TransaksiController@index');
Route::get('/admin/detailtransaksi/{id}','Admin\TransaksiController@detail');
Route::post('/admin/detailtransaksi/{id}','Admin\TransaksiController@detail');

Route::get('/admin/user', 'Admin\UserController@index');

Route::get('/admin/transaksi/cetak', 'LaporanController@cetakAdminDataTransaksi')->name('cetakAdminDataTransaksi');


//USER
Route::get('/user', function () {
    return view('user.dashboard');
});

Route::get('/user', function () {
    return view('user.dashboard');
});

Route::get('/user', function () {
    return view('user.dashboard');
});

Route::get('/user/transaksi', function () {
    return view('user.transaksi.transaksi');
});

Route::get('/user/profil', function () {
    return view('user.profil.profil');
});

Route::get('/logout', 'Auth\AuthController@logout');
