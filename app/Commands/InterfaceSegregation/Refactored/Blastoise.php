<?php

namespace App\Commands\InterfaceSegregation\Refactored;

use App\Commands\InterfaceSegregation\Refactored\Contracts\PokemonWaterInterface;

/**
 * class Blastoise
 */
class Blastoise extends Pokemon implements PokemonWaterInterface
{
    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct('Blastoise', 'Water');
    }

    /**
     * @return string
     */
    public function canSwim(): string
    {
        return $this->getName() . ' puedo nadar.';
    }
}
