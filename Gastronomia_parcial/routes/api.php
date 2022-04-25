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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Listar todas las gastronomias
Route::get('gastronomias', 'App\Http\Controllers\GastronomiaController@index');

//Listar una sola gastronomia
Route::get('gastronomia/{id}', 'App\Http\Controllers\GastronomiaController@show');

//Crear una categoria
Route::post('gastronomia', 'App\Http\Controllers\GastronomiaController@store');

//Actualizar
Route::put('gastronomia', 'App\Http\Controllers\GastronomiaController@store');

//Elimiar
Route::delete('gastronomia/{id}', 'App\Http\Controllers\GastronomiaController@destroy');
