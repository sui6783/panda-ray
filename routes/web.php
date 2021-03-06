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
*

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/','App\Http\Controllers\AboutController@index');

Route::get('/about','App\Http\Controllers\AboutController@index');

Route::get('/lotto','App\Http\Controllers\LottoController@index');

Route::post('/getLottoList', 'App\Http\Controllers\LottoController@getLottoList');