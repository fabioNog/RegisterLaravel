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
Route::get('/register/public/produtos', 'ProdutosController@index');

// Rotas Categorias
Route::get('/register/public/categorias', 'CategoriasController@index');
Route::get('/register/public/categorias/novacategoria', 'CategoriasController@create');
Route::post('/register/public/categorias', 'CategoriasController@store');
Route::get('/register/public/categorias/excluir/{id}', 'CategoriasController@destroy');
