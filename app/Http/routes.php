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

Route::get('/', function () {
    return view('Welcome');
});

// aqui criamos as rotas
Route::resource('tarefa', 'TarefaController');

// aqui chamandos elas
Route::get('/tarefa', function () {
    return 'Olá Mundo com Laravel 5';
});