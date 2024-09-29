<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Livewire\PokeDexComponent as PokeDexComponent;

Route::get('/', PokeDexComponent::class)->name('index');
