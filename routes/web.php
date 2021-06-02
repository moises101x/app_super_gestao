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

Route::get('/', 'PrincipalController@principal');
Route::get('/sobre-nos', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');


