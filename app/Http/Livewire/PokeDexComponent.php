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
        $this->limit = $request->get('limit', 15);
        $this->offset = $request->get('offset', 0);

        $cacheKey = "pokemons_{$this->limit}_{$this->offset}";

        // Tente obter os dados do cache
        $this->pokeDex = cache()->remember($cacheKey, 60 * 60, function () {
            $params = [
                'limit' => $this->limit,
                'offset' => $this->offset,
            ];

            $requestPokemon = Curl::to('https://pokeapi.co/api/v2/pokemon/')
                ->withData($params)
                ->asJson()
                ->get();

            $pokemons = $requestPokemon->results;

            $pokeDex = [];
            foreach ($pokemons as $pokemon) {
                $typePoke = [];
                $requestDetail = Curl::to($pokemon->url)->withData()->asJson()->get();

                foreach ($requestDetail->types as $requestDetails) {
                    $typePoke[] = $requestDetails->type->name;
                }

                $pokeDex[] = [
                    'nome' => $requestDetail->name,
                    'peso' => $requestDetail->weight,
                    'altura' => $requestDetail->height,
                    'numero' => $requestDetail->id,
                    'tipos' => $typePoke,
                    'img' => $requestDetail->sprites->front_default,
                ];
            }

            return $pokeDex;
        });
    }

    public function render()
    {
        return view('livewire.poke-dex-component');
    }
}
