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

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;



Route::get('/login', "Auth\LoginController@showLogin"); //Página para efetuar o login
Route::post('/login', "Auth\LoginController@login")->name('login_usuario'); //Ação para realizar o login
Route::get('/register', "Auth\RegisterController@showRegister"); //Página para registrar usuário
Route::post('/register', "Auth\RegisterController@register")->name('registrar_usuario'); // Ação registrar novo usuário
Route::get('/produtos/novo', 'ProdutosController@create')->middleware('auth'); //Página cadastro de produtos
Route::post('produtos/novo', 'ProdutosController@store')->name('registrar_produto'); //Ação cadastrar produto
Route::get('produtos/list', 'ProdutosController@list')->middleware('auth'); //Página para listar os produtos
Route::get('produto/edit/{id}', 'ProdutosController@edit')->middleware('auth'); //Página editar produto referente ao id
Route::put('produto/edit/{id}', 'ProdutosController@update')->name('editar_produto'); // Ação editar produto referente ao id
Route::get('/produto/del/{id}', 'ProdutosController@delete')->middleware('auth'); //Página para confirmar deletar item
Route::delete('produto/del/{id}', 'ProdutosController@destroy')->name('excluir_produto'); //Ação deletar produto referente ao id
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
