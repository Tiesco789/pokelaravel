<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Http\Request;

class PokeDexComponent extends Component
{
    public $pokeDex = []; // Variável que vai armazenar os dados dos Pokémons
    public $limit;
    public $offset;

    // Método que será executado na inicialização do componente
    public function mount(Request $request)
    {
        $params = [];

        if ($request->get('limit')) {
            $params['limit'] = $request->get('limit');
            $this->limit = $request->get('limit');
        }

        if ($request->get('offset')) {
            $params['offset'] = $request->get('offset');
            $this->offset = $request->get('offset');
        }

        $requestPokemon = Curl::to('https://pokeapi.co/api/v2/pokemon/')
            ->withData($params)
            ->asJson()
            ->get();

        $pokemons = $requestPokemon->results;

        foreach ($pokemons as $pokemon) {
            $typePoke = [];

            $requestDetail = Curl::to($pokemon->url)
                ->withData()
                ->asJson()
                ->get();

            foreach ($requestDetail->types as $requestDetails) {
                $typePoke[] = $requestDetails->type->name;
            }

            array_push($this->pokeDex, [
                'nome' => $requestDetail->name,
                'peso' => $requestDetail->weight,
                'altura' => $requestDetail->height,
                'numero' => $requestDetail->id,
                'tipos' => $typePoke,
                'img' => $requestDetail->sprites->front_default,
            ]);
        }
    }

    public function render()
    {
        return view('livewire.poke-dex-component');
    }
}
