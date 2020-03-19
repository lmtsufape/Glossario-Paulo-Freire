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

Route::get('/exPlugin', function () {
    return view('exemploPlugin');
});

Route::get('/', function () {
    return view('letras');
})->name('glossario');


Route::get('/letra/{l}', 'ListarVerbeteController@listar')->name('letra');

Route::get('/verbete/{id}', 'ListarTrechoController@listar')->name('verbete');

Auth::routes();

Route::get('/letras', 'ViewsController@glossario')->name('letras');
Route::get('/listar-todas-as-palavras', 'ViewsController@listarPalavras')->name('listarPalavras');
Route::get('/pesquisa', 'ViewsController@pesquisa')->name('pesquisa'); 

Route::get('/home', 'HomeController@index')->name('home');