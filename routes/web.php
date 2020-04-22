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

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('/letra/{l}', 'ListarVerbeteController@listar')->name('letra');

Route::get('/verbete/{id}', 'ListarTrechoController@listar')->name('verbete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/letras', 'ViewsController@glossario')->name('letras');
Route::get('/listar-todas-as-palavras', 'ViewsController@listarPalavras')->name('listarPalavras');
Route::get('/linha-do-tempo', 'ViewsController@LinhaDoTempo')->name('linhaDoTempo');

Route::get('/pesquisa', 'ViewsController@pesquisa')->name('pesquisa');
Route::any('/pesquisar', 'PesquisaController@novaPesquisa')->name('pesquisa.nova');
Route::any('/pesquisar/{id}', 'PesquisaController@pesquisaId')->name('pesquisa.id');
Route::get('/contarView/{id}', 'ViewsController@contarView')->name('contarView');

Route::get('/editar/trecho/{id}', 'EditarTrechoController@index')->name('editar')->middleware('auth');
Route::any('/salvar/trecho/{id}', 'EditarTrechoController@update')->name('editar.update')->middleware('auth');
Route::get('/editar/cancel', 'EditarTrechoController@cancel')->name('editar.cancel')->middleware('auth');

Route::get('/adicionar/verbete', 'VerbeteController@exibir')->name('verbete.add')->middleware('auth');
Route::any('/adicionar/verbete/salvar', 'VerbeteController@adicionar')->name('adicionar.add.save')->middleware('auth');