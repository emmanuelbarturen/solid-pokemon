<?php

namespace App\Commands\DependencyInversion\Pokedex\Wrong;

use LaravelZero\Framework\Commands\Command;

/**
 * class PokedexWrongCommand
 */
class PokedexWrongCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'dependency:pokedex-wrong';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Dependency inversion: Pokedex wrong example';

    /**
     *
     * @return void
     */
    public function handle()
    {
        $list = [
            "Charizar",
            "Eevee",
            "pikachu"
        ];

        $pokedex = new Pokedex($list);
        $responses = $pokedex->getInfo();
        foreach ($responses as $response) {
            $this->info($response);
        }
        $this->error('❌ Se cuenta con una dependencia directa');
        $this->error('❌ La clase pokedex no sabe como se implementa la clase ApiPokemonService');
    }
}
