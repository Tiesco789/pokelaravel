<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class pokeApiController extends Controller
{
    public function apiNomes(Request $request)
    {
        $params = [];
        $url = '';

        if ($request->get('limit')) {
            $params['limit'] = $request->get('limit');
        }

        if ($request->get('offset')) {
            $params['offset'] = $request->get('offset');
        }

        $requestPokemon = Curl::to('https://pokeapi.co/api/v2/pokemon/')->withData($params)->asJson()->get();

        $pokemons = $requestPokemon->results;

        $pokeDex = [];

        foreach ($pokemons as $pokemon) {
            $typePoke = [];
            $spritePoke = [];

            $requestDetail = Curl::to($pokemon->url)->withData()->asJson()->get();

            foreach ($requestDetail->types as $requestDetails) {
                $typePoke[] = $requestDetails->type->name;
            }

            array_push($pokeDex, [
                'nome' => $requestDetail->name,
                'peso' => $requestDetail->weight,
                'altura' => $requestDetail->height,
                'numero' => $requestDetail->id,
                'tipos' => $typePoke,
                'img' => $requestDetail->sprites->front_default

            ]);
        }

        return view('index', compact('pokeDex'));
    }
}
