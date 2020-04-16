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

Route::get('halaman1', function () {
    return view ('Pages');
});









route::resource('control','PagesController');


//route CRUD
Route::get('/pengunjung','PengunjungController@index');

//Input database
Route::get('/pengunjung/tambah','PengunjungController@tambah');
Route::post('/pengunjung/store' ,'PengunjungController@store');

//Edit Database
Route::get('/pengunjung/edit/{id}','PengunjungController@edit');
Route::post('/pengunjung/update','PengunjungController@update');


//Delete Database
Route::get('/pengunjung/hapus/{id}','PengunjungController@hapus');







