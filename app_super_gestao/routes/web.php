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

Route::get('/', 'PrincipalController@principal');
Route::get('/sobrenos', 'SobreNosController@sobreNos');
Route::get('/login', 'LoginController@login');
Route::get('/contato', 'ContatoController@contato');

Route::prefix('/app')->group(function () {
    Route::get('/produtos', 'ProdutosController@produtos');
    Route::get('/fornecedores', 'FornecedoresController@fornecedores');
    Route::get('/clientes', 'ClientesController@clientes');    
});

