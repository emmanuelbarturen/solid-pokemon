<?php

namespace App\Commands\InterfaceSegregation\Refactored;

use App\Commands\InterfaceSegregation\Refactored\Contracts\PokemonFlyInterface;

/**
 * class Charizar
 */
class Charizard extends Pokemon implements PokemonFlyInterface
{
    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct('Charizard', 'Fire');
    }

    /**
     * @return string
     */
    public function canFly(): string
    {
        return $this->getName() . " Puedo volar";
    }
}
