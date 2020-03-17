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
    return view('letras');
});

Route::get('/letra/{l}', 'ListarVerbeteController@listar')->name('letra');

Route::get('/verbete/{id}', 'ListarTrechoController@listar')->name('verbete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
