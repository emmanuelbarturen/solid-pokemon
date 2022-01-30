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
            switch ($pokemon->getType()) {
                case "Electric":
                    //Este comportamiento podría ser muy complejo y hacer difícil de mantener y entender en su conjunto por cada case.
                    // además podría crecer demasiado
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

            $output[] = $pokemon->getName() . ' ➜ ' . $attack;
        }

        return $output;
    }
}
