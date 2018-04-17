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

Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');
Route::get('/upload', 'UploadController@index')->name('upload')->middleware('auth');
Route::post('/upload', 'UploadController@update')->middleware('auth');
Route::get('/search', 'SearchController@index')->name('search')->middleware('auth');
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify')->name('verifyemail');
