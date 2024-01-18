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

        $pokemon = [];
        if ($request['search']) {

            $search = $request->validated()['search'];
            // $allPokemon = Http::get('https://pokeapi.co/api/v2/pokemon-species/?offset=0&limit=1025');
            // $allPokemon = $allPokemon->json();
            // // loop through all pokemon, if 'name' contains $search then add to array
            // foreach ($allPokemon['results'] as $each) {
            //     if (strpos($each['name'], $search) !== false) {
            //         array_push($pokemon, $each);
            //     }
            // }

            $pokemon = Http::get('https://pokeapi.co/api/v2/pokemon-species/' . $search);
            $pokemon = $pokemon->json();
            $searchResults = true;
        } else {
            // $pokemon = Http::get('https://pokeapi.co/api/v2/pokemon-species/');
            $pokemon = Http::get('https://pokeapi.co/api/v2/pokemon-species/?offset=0&limit=52');
            $pokemon = $pokemon->json();
        }

        return view('listings.index', [
            'pokemon' => $pokemon,
            'searchResults' => $searchResults
        ]);
    }

    public function single($id)
    {
        // get single pokemon
        $pokemon = Http::get('https://pokeapi.co/api/v2/pokemon/' . $id);
        $pokemon = $pokemon->json();

        $pokemonImage = Http::get('https://pokeapi.co/api/v2/pokemon-form/' . $id);
        $pokemonImage = $pokemonImage->json();

        $img = $pokemonImage['sprites']['front_default'];

        return view('listings.single', [
            'pokemon' => $pokemon,
            'img' => $img,
        ]);
    }
}
