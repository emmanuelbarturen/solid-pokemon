<?php

namespace App\Commands\LiskovSubstitution\Refactored;

/**
 * class Charizard
 */
class Charizard extends PokemonFly
{

    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct('Charizard', 'Fire');
    }
}
