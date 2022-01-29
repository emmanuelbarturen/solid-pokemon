<?php

namespace App\Commands\OpenClosed\Raw;

/**
 * class ProcessAttack
 */
class ProcessAttack
{
    /**
     * @param array $pokemonList
     * @return array
     */
    public function allPokemonAttack(array $pokemonList): array
    {
        $output = [];
        foreach ($pokemonList as $pokemon) {
            switch ($pokemon->getType()) {
                case "Electric":
                    $attack = "Impactrueno ⚡️";
                    break;
                case "Fire":
                    $attack = "Aliento igneo 🔥";
                    break;
                case "Water":
                    $attack = "Pitsola de agua 🔫💦";
                    break;
                default:
                    $attack = "Ataque base";
            }

            $output[] = $attack;
        }

        return $output;
    }
}
