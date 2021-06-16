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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/login', 'LoginController');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::resource('/aluno', 'AlunoController');

Route::resource('/professor', 'ProfessorController');

Route::resource('/turma', 'TurmaController');

Route::resource('/carta', 'CartaController');

Route::resource('/pagamento', 'PagamentoController');

Route::get('/role', 'RoleController@index')->name('role');

Route::resource('/user', 'UserController');
