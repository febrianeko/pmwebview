<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// halaman awal
Route::get ('/', 'PagesController@homepage');
//halaman about
Route::get('about','PagesController@about');

//latihan name route
Route::get('coba', 'CobaController@tampilcoba')->name('halcoba');
Route::get('tentang', 'CobaController@haltentang');

Route::get('engineer', 'FormController@index');
//menampilkan halaman form
Route::get('engineer/create', 'FormController@create');

//form edit
Route:: get('engineer/{engineer}/edit', 'FormController@edit');
Route:: patch('engineer/{engineer}', 'FormController@update');

Route::get('engineer/{engineer}', 'FormController@show');
//menyimpan inputan form ke database
Route::post('result', 'FormController@store');

//halaman login dan register
Route::auth();
Route::get('/home', 'HomeController@index');

Route::patch('engineer/{engineer}', 'FormController@update');


