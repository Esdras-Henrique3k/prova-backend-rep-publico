<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('cadastrar', 'App\Http\Controllers\AdminController@create');
Route::get('listar-todos', 'App\Http\Controllers\AdminController@get');
