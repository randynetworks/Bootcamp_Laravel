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

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::delete('/pertanyaan/{question}', 'PertanyaanController@destroy');
Route::get('/pertanyaan/{question}/edit', 'PertanyaanController@edit');
Route::patch('/pertanyaan/{question}', 'PertanyaanController@update');


Route::post('/jawaban', 'JawabanController@store');
Route::get('/jawaban/{answer}/edit', 'JawabanController@edit');
Route::patch('/jawaban/{answer}', 'JawabanController@update');
Route::delete('/jawaban/{answer}', 'JawabanController@destroy');
