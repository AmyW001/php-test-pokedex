<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

// main page to view all pokemon
Route::get('/', [PokemonController::class, 'index']);

// single pokemon page
Route::get('/{id}', [PokemonController::class, 'single']);
