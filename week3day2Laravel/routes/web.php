<?php

use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', 'HomeController@index');

// REGISTER
Route::get('/register', 'AuthController@register');

// WELCOME
Route::get('/welcome', 'AuthController@welcome');
