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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'PrincipalController@principal')->name("site.index");

Route::get('/contato', 'ContatoController@contato')->name("site.contato");

Route::get('/sobre-nos', 'ContatoController@contato')->name("site.sobre-nos");

Route::get('/login', function(){ return 'Login'; })->name("site.login");

Route::prefix("/app")->group( function(){
    Route::get('/clientes', function(){ return 'clientes'; })->name("site.clientes");
    Route::get('/fornecedores', 'FornecedoresController@index')->name("site.fornecedores");
    Route::get('/produtos', function(){ return 'produtos'; })->name("site.produtos");
});

Route::get("/teste/{p1}/{p2}", "TesteController@teste")->name("teste");

Route::fallback( function (){
    return redirect()->route('site.index');
});