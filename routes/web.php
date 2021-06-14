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


