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

Route::get('/', 'TarefaController@home'); //Route da página inicial (Controller home)
Route::get('/criar', 'TarefaController@criar'); //Route da página de criação de tarefas (Controller criar)
Route::post('/salvar', 'TarefaController@salvar'); //(Controller salvar)
Route::get('/editar/{id}', 'TarefaController@editar'); //Route da página de edição (Controller editar)
Route::patch('/atualizar/{id}', 'TarefaController@atualizar'); //(Controller atualizar)