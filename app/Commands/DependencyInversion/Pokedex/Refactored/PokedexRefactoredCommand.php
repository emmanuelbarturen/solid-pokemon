<?php

namespace App\Commands\DependencyInversion\Pokedex\Refactored;

use App\Commands\DependencyInversion\Pokedex\Refactored\Services\PokemonDataService;
use LaravelZero\Framework\Commands\Command;

/**
 * class PokedexRefactoredCommand
 */
class PokedexRefactoredCommand extends Command
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
    protected $description = 'Dependency inversion: Pokedex refactored example';

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
