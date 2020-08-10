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
Route::post('/ajax/deleteCart', 'Main\TransactionController@deleteCart');
Route::get('/cart', 'Main\TransactionController@cartPage');
Route::get('/ajax/voucher', 'Main\VoucherController@getVoucher');
Route::post('/ajax/cekout', 'Main\TransactionController@cekOut');


Route::get('/payment/{id}', 'Main\TransactionController@pagePayment');
Route::post('/payment/send', 'Main\TransactionController@send');

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
Route::get('/admin/detailtransaksi/{id}', 'Admin\TransaksiController@detail');
Route::post('/admin/detailtransaksi/{id}', 'Admin\TransaksiController@detail');

Route::get('/admin/user', 'Admin\UserController@index');

Route::get('/admin/transaksi/cetak', 'LaporanController@cetakAdminDataTransaksi')->name('cetakAdminDataTransaksi');


//USER
Route::get('/user', 'Main\MainController@dashboard');

Route::get('/user/transaksi', 'Main\TransactionController@pageTransaksi');
Route::get('/user/transaksi/{id}', 'Main\TransactionController@detailHistory');
Route::get('/user/profil', function () {
    return view('user.profil.profil');
});

Route::get('/admin/laporan/penyewaan', 'Laporan\PenyewaanController@index');
Route::get('/admin/laporan/penyewaan/list', 'Laporan\PenyewaanController@laporanPenyewaan');
Route::get('/admin/laporan/penyewaan/print', 'Laporan\PenyewaanController@cetak');
Route::get('/payment', 'Laporan\PembayaranController@index');
Route::get('/items', 'Laporan\BarangTerjualController@index');

Route::get('/payment/list', 'Laporan\PembayaranController@laporanPembayaran');
Route::get('/items/list', 'Laporan\BarangTerjualController@laporanBarang');

Route::get('/payment/print', 'Laporan\PembayaranController@cetak');
Route::get('/items/print', 'Laporan\BarangTerjualController@cetak');

Route::get('/logout', 'Auth\AuthController@logout');
