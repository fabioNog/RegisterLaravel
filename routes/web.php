<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

// Rotas Produtos
Route::get('/register/public/produtos/produtos', 'ProdutosController@index');
Route::get('/register/public/produtos/novoproduto', 'ProdutosController@create');
Route::post('/register/public/produtos/produtos', 'ProdutosController@store');
Route::get('/register/public/produtos/excluir/{id}', 'ProdutosController@destroy');
Route::get('/register/public/produtos/editar/{id}', 'ProdutosController@edit');
Route::post('/register/public/produtos/{id}', 'ProdutosController@update');

// Rotas Categorias
Route::get('/register/public/categorias', 'CategoriasController@index');
Route::get('/register/public/categorias/novacategoria', 'CategoriasController@create');
Route::post('/register/public/categorias', 'CategoriasController@store');
Route::get('/register/public/categorias/excluir/{id}', 'CategoriasController@destroy');
Route::get('/register/public/categorias/editar/{id}', 'CategoriasController@edit');
Route::post('/register/public/categorias/{id}', 'CategoriasController@update');
