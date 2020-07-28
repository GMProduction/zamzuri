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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/produk', 'Admin\ProdukController@index');
Route::post('/admin/produk/delete/{id}', 'Admin\ProdukController@delete');

Route::get('/admin/tambahproduk', function () {
    return view('admin.produk.tambahproduk');
});
Route::post('/admin/tambahproduk', 'Admin\ProdukController@addForm');
Route::get('/admin/editproduk/{id}', 'Admin\ProdukController@editForm');
Route::post('/admin/editproduk/{id}', 'Admin\ProdukController@editForm');

Route::get('/admin/transaksi', function () {
    return view('admin.transaksi.transaksi');
});

Route::get('/admin/mitra', function () {
    return view('admin.mitra.mitra');
});
