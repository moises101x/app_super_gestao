<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return 'Ola, seja bem vindo ao cruso';
});
Route::get('/sobre-nos', function () {
    return 'sobre-nos';
});
Route::get('/contato', function () {
    return 'contato';
});
*/

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login')->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes')->name('app.clientes');
    Route::get('/fornecedores')->name('app.fornecedores');
    Route::get('/produtos')->name('app.produtos');
});
