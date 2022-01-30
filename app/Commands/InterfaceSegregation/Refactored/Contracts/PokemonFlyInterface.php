<?php

namespace App\Commands\InterfaceSegregation\Refactored\Contracts;

/**
 * interface PokemonFlyInterface
 */
interface PokemonFlyInterface
{
    /**
     * @return string
     */
    public function canFly(): string;
}
