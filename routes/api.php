<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('pessoa', 'PessoaController@getall');
Route::post('pessoa', 'PessoaController@store');
Route::get('pessoa/{id}', 'PessoaController@show');
Route::put('pessoa/{id}', 'PessoaController@update');
Route::delete('pessoa/{cpf}', 'PessoaController@destroy');


Route::get('estado', 'EstadoController@index');
Route::get('cidade', 'CidadeController@index');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
