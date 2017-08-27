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

// Bands Resource Routes
Route::resource('bands', 'BandController');

// Album Resource Routes
Route::resource('albums', 'AlbumController');

// Redirect home page to artists list
Route::get('/', 'BandController@index');
