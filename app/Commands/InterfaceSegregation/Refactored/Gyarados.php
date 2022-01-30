<?php

namespace App\Commands\InterfaceSegregation\Refactored;

use App\Commands\InterfaceSegregation\Refactored\Contracts\PokemonFlyInterface;
use App\Commands\InterfaceSegregation\Refactored\Contracts\PokemonWaterInterface;

/**
 * class Gyarados
 */
class Gyarados extends Pokemon implements PokemonFlyInterface, PokemonWaterInterface
{

    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct('Gyarados', 'Psychic');
    }

    /**
     * @return string
     */
    public function canFly(): string
    {
        return $this->getName() . " Puedo volar";
    }

    /**
     * @return string
     */
    public function canSwim(): string
    {
        return $this->getName() . " Puedo nadar";
    }
}
