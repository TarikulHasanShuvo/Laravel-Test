<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/uploadfile', 'HomeController@uploadfile')->name('uploadfile');


Route::resource('File', 'FileController');
Route::get('', 'fileController@index')->name('welcome');
Route::get('/File/edit/{id}', 'fileController@edit')->name('file.edit');

Route::get('/image/{id}', 'FileController@image')->name('image');


Route::get('/video/{id}', 'FileController@video')->name('video');
