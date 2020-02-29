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
    return view('index');
});

Route::get('/hewan', 'HewanController@index');
Route::get('/buah', 'BuahController@index');
Route::get('/profesi', 'ProfesiController@index');
Route::get('/kendaraan', 'KendaraanController@index');

Route::post('/hewan', 'HewanController@answer');
Route::post('/buah', 'BuahController@answer');
Route::post('/profesi', 'ProfesiController@answer');
Route::post('/kendaraan', 'KendaraanController@answer');
