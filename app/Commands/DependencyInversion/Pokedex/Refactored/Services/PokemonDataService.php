<?php

namespace App\Commands\DependencyInversion\Pokedex\Refactored\Services;

interface PokemonDataService
{
    public function getInfo(string $pokemon): string;
}
