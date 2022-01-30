<?php

namespace App\Commands\DependencyInversion\Pokedex\Raw;

use Illuminate\Support\Facades\Http;

/**
 * class ApiPokemon
 */
class ApiPokemon
{
    /**
     * @param string $pokemon
     * @return string
     */
    public function getInfo(string $pokemon): string
    {
        $response = Http::get('https://workshop-mongo.herokuapp.com/pokemon/name/' . $pokemon);
        return $response->body();
    }
}
