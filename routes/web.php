<?php
Route::get('/', 'HomeController@index')->name('home');
Route::resource('kategori', 'KategoriBarangController');
Route::resource('pemasok', 'PemasokController');
Route::resource('barang', 'BarangController');
Route::resource('produk', 'ProdukController');
Route::resource('pelanggan', 'PelangganController');

Route::put('produk','ProdukController@update');
Route::delete('produk','ProdukController@destroy');

Route::put('barang','BarangController@update');
Route::delete('barang','BarangController@destroy');

Route::put('pemasok','PemasokController@update');
Route::delete('pemasok','PemasokController@destroy');

Route::put('pelanggan','PelangganController@update');
Route::delete('pelanggan','PelangganController@destroy');
