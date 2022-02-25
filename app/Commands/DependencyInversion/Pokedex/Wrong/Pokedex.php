<?php

namespace App\Commands\DependencyInversion\Pokedex\Wrong;

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
     * @var ApiPokemon
     */
    private $api;

    /**
     * @param array $pokemons
     */
    public function __construct(array $pokemons)
    {
        $this->pokemons = $pokemons;
        $this->api = new ApiPokemon();
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
