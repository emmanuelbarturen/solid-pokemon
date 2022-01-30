<?php

namespace App\Commands\DependencyInversion\Pokedex\Refactored;

use App\Commands\DependencyInversion\Pokedex\Refactored\Services\PokemonDataService;
use LaravelZero\Framework\Commands\Command;

/**
 * class PokedexRawCommand
 */
class PokedexRawCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'di:pokedex-refactored';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = '';

    /**
     *
     * @return void
     */
    public function handle(PokemonDataService $pokemonService)
    {
        $list = [
            "Charizar",
            "Eevee",
            "pikachu"
        ];

        $pokedex = new Pokedex($list, $pokemonService);
        $responses = $pokedex->getInfo();
        foreach ($responses as $response) {
            $this->info($response);
        }
        $this->error('❌ Se cuenta con una dependencia directa');
        $this->error('❌ La clase pokedex no sabe como se implementa la clase ApiPokemonService');
    }
}
