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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tarefa/novo', 'TarefaController@novo');
Route::post('/tarefa/cadastrar', 'TarefaController@cadastrar');
Route::get('/tarefa/remover/{id}', 'TarefaController@remover');
Route::get('/tarefa/pesquisar', 'TarefaController@pesquisar');
