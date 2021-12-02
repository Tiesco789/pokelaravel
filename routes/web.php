<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'pokeApiController@apiNomes')->name('index');
