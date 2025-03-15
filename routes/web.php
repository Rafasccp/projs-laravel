<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// rota que retorna uma ola
Route::get('/olamundo', function () {
    return "ola mundo";
});
// rota GET que retorna uma msg com parâmetro
// não obrigatorio
Route::get('/faleconosco/{id?}',
function ($id = null)
{ return "recebi o valor = $id"; }
);
// rota POST chamada de um form,
// com função ‘dd’
Route::post('/contato', ['uses'=>'App\Http\Controllers\ContatoController@index']);
