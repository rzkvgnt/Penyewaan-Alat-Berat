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
    return view('welcome');
});
Route::get('/sewa1', function () {
    return view('sewa1');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/daftar', function () {
    return view('daftar');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/penyewaan', function () {
    return view('penyewaan');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/sewa', 'sewaController@index');
Route::get('/alat', 'alatController@index');
Route::get('/sewa/add', 'sewaController@add');
Route::post('/sewa/save', 'sewaController@save');
Route::get('/sewa/edit/{id}', 'sewaController@edit');
Route::get('/alat/add', 'alatController@add');
Route::post('/alat/save', 'alatController@save');
Route::get('/alat/edit/{id}', 'alatController@edit');
Route::delete('/sewa/{id}', 'sewaController@destroy');
Route::post('/sewa/save', 'sewaController@save');
