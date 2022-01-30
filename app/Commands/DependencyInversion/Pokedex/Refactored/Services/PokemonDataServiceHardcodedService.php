<?php

namespace App\Commands\DependencyInversion\Pokedex\Refactored\Services;

/**
 * class PokemonDataServiceHardcodedService
 */
class PokemonDataServiceHardcodedService implements PokemonDataService
{

    /**
     * @param string $pokemon
     * @return string
     */
    public function getInfo(string $pokemon): string
    {
        $allData = $this->data();

        if (isset($allData[$pokemon])) {
            return json_encode($allData[$pokemon]);
        }

        return 'No encontrados';
    }

    /**
     * @return array
     */
    public function data(): array
    {
        return [
            "Charizar" => [
                'categoria' => 'Volador',
                'habilidad' => 'Mar Llamas'
            ],
            "Eevee" => [
                'categoria' => 'Evolucion',
                'habilidad' => 'Fuga'
            ],
            "pikachu" => [
                'categoría' => 'Raton',
                'habilidad' => 'Attack Trueno'
            ],
        ];
    }
}
