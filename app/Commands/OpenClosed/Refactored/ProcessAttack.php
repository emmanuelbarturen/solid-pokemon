<?php

namespace App\Commands\OpenClosed\Refactored;

/**
 * class ProcessAttack
 */
class ProcessAttack
{
    /**
     *  Función que procesa el ataque de cada tipo de pokemon
     *
     *
     * @param array $pokemonList
     * @return array
     */
    public function allPokemonAttack(array $pokemonList): array
    {
        $output = [];
        foreach ($pokemonList as $pokemon) {
            $output[] = $pokemon->getAttack();
        }

        return $output;
    }
}
