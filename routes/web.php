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
    return redirect('/logar');
});

Route::get('/logar', function (){
    return view('auth.logar');
}); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('/login', 'LoginController'); 

Route::resource('/aluno', 'AlunoController');
// Route::get('/alunos/{id}', 'AlunoController@show');

Route::resource('/professor', 'ProfessorController');

Route::resource('/turma', 'TurmaController');

Route::resource('/carta', 'CartaController');

Route::resource('/pagamento', 'PagamentoController');

Route::get('/role', 'RoleController@index')->name('role');

Route::resource('/user', 'UserController');

Route::get('/relatorio', 'RelatorioController@index');

Route::get('relatorio/relatorio', function(){
    return view('admin.relatorio.relatorio');
});
