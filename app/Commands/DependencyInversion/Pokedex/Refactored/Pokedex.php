<?php

namespace App\Commands\DependencyInversion\Pokedex\Refactored;

use App\Commands\DependencyInversion\Pokedex\Refactored\Services\PokemonApiServiceService;
use App\Commands\DependencyInversion\Pokedex\Refactored\Services\PokemonDataService;

/**
 * class Pokedex
 */
class Pokedex
{


    /**
     * @var array
     */
    private $pokemons;
    /**
     * @var PokemonApiServiceService
     */
    private $api;

    /**
     * @param array $pokemons
     * @param PokemonDataService $pokemonDataService
     */
    public function __construct(array $pokemons,PokemonDataService $pokemonDataService)
    {
        $this->pokemons = $pokemons;
        $this->api = $pokemonDataService;
    }

    /**
     * @return array
     */
    public function getInfo(): array
    {
        $output = [];

        foreach ($this->pokemons as $pokemon) {
            $output[] = $this->api->getInfo($pokemon);
        }

        return $output;
    }
}
