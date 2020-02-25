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
    return view('pages.inicio');
});

//ROTAS AJUDE-NOS

Route::get('/ajude-nos', 'AjudaController@index');
Route::post('/ajude-nos', 'AjudaController@cadastrarAjuda');
Route::get('/ajuda/excluir/{id}', 'AjudaController@excluir');

//ROTAS DOGS

Route::get('/dogs', 'DogController@listar');
Route::get('/cadastrar-dog', 'DogController@mostrarForm');
Route::post('/cadastrar-dog', 'DogController@cadastrarDog');
Route::get('/dog/excluir/{id}', 'DogController@excluir');


//ROTAS ADOCAO

Route::get('/dogs/{id}', 'AdocaoController@mostrarForm');
Route::post('/adotar', 'AdocaoController@adotar');
Route::get('/adocao/aceitar/{id}', 'AdocaoController@aceitarAdocao')->middleware('auth');
Route::get('/adocao/recusar/{id}', 'AdocaoController@recusarAdocao')->middleware('auth');


//ROTAS SOBRE

Route::get('/sobre', 'SobreController@mostrar');

//ROTAS LOGIN

Route::get('/login', 'UsuarioController@mostrarForm')->name('login');
Route::post('/login', 'UsuarioController@verificarLogin');
Route::get('/logout', 'UsuarioController@logout');

//ROTAS DASHBOARD ->middleware('auth');

Route::get('/dashboard', 'DashboardController@listar')->middleware('auth');
Route::get('/dashboard/aceitar/{id}', 'DogController@aceitarDog')->middleware('auth');
Route::get('/dashboard/recusar/{id}', 'DogController@recusarDog')->middleware('auth');

