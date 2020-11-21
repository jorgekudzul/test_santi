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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('fechas', 'App\Http\Controllers\CalendarioController@vista_uno');
Route::post('fechas', 'App\Http\Controllers\CalendarioController@calculate');

Route::resource('medicos', 'App\Http\Controllers\MedicosController');
