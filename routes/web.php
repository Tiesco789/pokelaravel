<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Livewire\PokeDexComponent as PokeDexComponent;

Route::get('/', function () {
    return view('index');
})->name('index');
