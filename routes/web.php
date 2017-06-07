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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/url', 'UrlController@index');
Route::post('/url', 'UrlController@store');
Route::get('/url/{url}/edit', 'UrlController@edit');
Route::post('/url/{url}', 'UrlController@update');
Route::get('/url/create', 'UrlController@create');
Route::delete('/url/{url}', 'UrlController@destroy');
Route::delete('/url/{url}/switchupdate', 'UrlController@status');
Route::get('/url/{url}/show', 'UrlController@show');
