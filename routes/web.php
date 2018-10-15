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
    return view('inicial');
});
Route::get('/menu','MenuController@index')->name('menu');

Route::get('/cadastrarcliente', 'ClienteController@index')->name('cadastrarcliente');
Route::get('/clientes', 'ClienteController@list')->name('clientesget');
Route::post('/clientes', 'ClienteController@store')->name('clientes');
Route::get('/editcliente/{id}', 'ClienteController@edit')->name('editcliente');
Route::post('/atualizarcliente', 'ClienteController@update')->name('atualizarcliente');
Route::get('/apagarcliente/{id}', 'ClienteController@destroy')->name('apagarcliente');

Route::get('/cadastrarfornecedor', 'FornecedorController@index')->name('cadastrarfornecedor');
Route::get('/fornecedores', 'FornecedorController@list')->name('fornecedoresget');
Route::post('/fornecedores', 'FornecedorController@store')->name('fornecedores');
Route::get('/editfornecedor/{id}', 'FornecedorController@edit')->name('editfornecedor');
Route::post('/atualizarfornecedor', 'FornecedorController@update')->name('atualizarfornecedor');
Route::get('/apagarfornecedor/{id}', 'FornecedorController@destroy')->name('apagarfornecedor');

Route::get('/cadastrarfuncionario', 'FuncionarioController@index')->name('cadastrarfuncionario');
Route::get('/funcionarios', 'FuncionarioController@list')->name('funcionariosget');
Route::post('/funcionarios', 'FuncionarioController@store')->name('funcionarios');
Route::get('/editfuncionario/{id}', 'FuncionarioController@edit')->name('editfuncionario');
Route::post('/atualizarfuncionario', 'FuncionarioController@update')->name('atualizarfuncionario');
Route::get('/apagarfuncionario/{id}', 'FuncionarioController@destroy')->name('apagarfuncionario');

Route::get('/cadastrarproduto', 'ProdutoController@index')->name('cadastrarproduto');
Route::get('/produtos', 'ProdutoController@list')->name('produtosget');
Route::post('/produtos', 'ProdutoController@store')->name('produtos');
Route::get('/editproduto/{id}', 'ProdutoController@edit')->name('editproduto');
Route::post('/atualizarproduto', 'ProdutoController@update')->name('atualizarproduto');
Route::get('/apagarproduto/{id}', 'ProdutoController@destroy')->name('apagarproduto');

Route::get('/cadastrarvenda', 'VendaController@index')->name('cadastrarvenda');
Route::get('/vendas', 'VendaController@list')->name('vendasget');
Route::post('/vendas', 'VendaController@store')->name('vendas');
Route::get('/editvenda/{id}', 'VendaController@edit')->name('editvenda');
Route::post('/atualizarvenda', 'VendaController@update')->name('atualizarvenda');
Route::get('/apagarvenda/{id}', 'VendaController@destroy')->name('apagarvenda');