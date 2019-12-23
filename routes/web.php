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

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', 'HomeController@Tambah')->name('donatur');
Route::post('/home', 'HomeController@store')->name('donaturStore');

Auth::routes();

Route::get('/admin', 'DonasiController@Index')->name('donaturIndex');
Route::get('/admin/donatur', 'DonasiController@donatur')->name('donaturs');
Route::get('/admin/hapus/{id}','DonasiController@hapus')->name('donaturHapus');
Route::get('/admin/ubah/{id}', 'DonasiController@ubah')->name('donaturUbah');
Route::put('/admin/{id}', 'DonasiController@update')->name('donaturUpdate');
Route::get('/admin/donatur/{id}', 'DonasiController@show')->name('donaturShow');




