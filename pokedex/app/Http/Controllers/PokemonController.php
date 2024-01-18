<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdRequest;
use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    public function index(SearchRequest $request)
    {
        $searchResults = false;
        // "/?search=aegislash"
        if ($request['search']) {
            $search = $request->validated()['search'];
            $pokemon = Http::get('https://pokeapi.co/api/v2/pokemon-species/' . $search);
            $pokemon = $pokemon->json();
            $searchResults = true;
        } else {
            $pokemon = Http::get('https://pokeapi.co/api/v2/pokemon-species/');
            $pokemon = $pokemon->json();
        }

        // dd($pokemon);
        // https://pokeapi.co/api/v2/pokemon-species/?offset=0&limit=1025

        return view('listings.index', [
            'pokemon' => $pokemon,
            'searchResults' => $searchResults,
        ]);
    }
}
