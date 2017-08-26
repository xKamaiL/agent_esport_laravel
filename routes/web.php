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


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/view', 'HomeController@index');

Route::get('/login', 'Auth\LoginController@index');
Route::post('/login', 'Auth\LoginController@postLogin')->name("login");


Route::middleware('auth')->group(function () {
    Route::get('/backend', 'BackendController@index')->name("backend");
    Route::get('/backend/edit', 'BackendController@view')->name("backend.edit");
    Route::post('/backend/add', 'BackendController@add')->name("backend.add");
    Route::get('/backend/remove/{id}', 'BackendController@remove')->name("backend.remove");
});
