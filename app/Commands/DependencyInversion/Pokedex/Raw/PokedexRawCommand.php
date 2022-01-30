<?php

namespace App\Commands\DependencyInversion\Pokedex\Raw;

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
    protected $signature = 'di:pokedex-raw';

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
        $this->error('❌ La clase pokedex sabe como se implementa la clase ApiPokemon');
        $this->error('❌ Claramente se rompe mas de un principio SOLID');
    }
}
