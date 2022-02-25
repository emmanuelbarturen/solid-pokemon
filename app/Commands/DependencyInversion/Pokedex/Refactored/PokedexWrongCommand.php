<?php

namespace App\Commands\DependencyInversion\Pokedex\Refactored;

use App\Commands\DependencyInversion\Pokedex\Refactored\Services\PokemonDataService;
use LaravelZero\Framework\Commands\Command;

/**
 * class PokedexRawCommand
 */
class PokedexWrongCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'dependency:pokedex-refactored';

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
    }
}
