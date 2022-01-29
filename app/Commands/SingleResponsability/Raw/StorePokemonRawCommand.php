<?php

namespace App\Commands\SingleResponsability\Raw;

use App\Commands\SingleResponsability\Raw\Pokemon;
use LaravelZero\Framework\Commands\Command;

/**
 * class StorePokemonRawCommand
 */
class StorePokemonRawCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'srp:store-pokemon-raw';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Al guardar el registro de un pokemon, debemos generar un log';

    /**
     *
     * @return void
     */
    public function handle()
    {
        // Creamos la instancia de la clase pokemon
        $pokemon = new Pokemon("Eevee", "normal", ["Jolteon", "Vaporeon", "Flareon"]);
        $this->info("✅ Clase Pokemón define attributos");
        $this->info("✅ Clase Pokemón permite el acceso a los atributos");
        $this->error('❌ Realiza operaciones sobre una base de datos');
        $this->error('❌ Se acopla a otras dependencias');
    }
}
