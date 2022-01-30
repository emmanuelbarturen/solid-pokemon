<?php

namespace App\Commands\LiskovSubstitution\Refactored;

/**
 * class PokemonFly
 */
class PokemonFly extends Pokemon
{
    /**
     * @return string
     */
    public function canFly(): string
    {
        return "Puedo volar";
    }
}
