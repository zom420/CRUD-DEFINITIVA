<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Cadastra um cliente //

Route::post('/clientes','ClientesController@create')->name('create-clientes');

// Clientes cadastrados //


Route::get('/clientes', 'ClientesController@list')->name('list-clientes');

// Encontrar o cliente //


Route::get('/clientes/{id}', 'ClientesController@show')->name('show-clientes');

// Atualizar informação //

Route::put('/clientes/{id}', 'ClientesController@update')->name('update-clientes');

// Deletar cadastro //

Route::delete('/clientes/{id}', 'ClientesController@delete')->name('delete-clientes');


// Livros no sistema //

Route::post('/livros','LivrosController@create')->name('create-livros');

// Verificar os livros cadastrados//

Route::get('/livros', 'LivrosController@list')->name('list-livros');

// Verificar id do livro //

Route::get('/livros/{id}', 'LivrosController@show')->name('show-livros');

// Editar //

Route::put('/livros/{id}', 'LivrosController@update')->name('update-livros');

// Deletar //

Route::delete('/livros/{id}', 'LivrosController@delete')->name('delete-livros');



// Alterações diretas empréstimos //


Route::apiResource('emprestimos', 'EmprestimoController');

