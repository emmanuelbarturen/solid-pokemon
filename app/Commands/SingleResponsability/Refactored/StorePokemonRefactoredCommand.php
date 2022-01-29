<?php

namespace App\Commands\SingleResponsability\Refactored;

use App\Commands\SingleResponsability\Refactored\Logger\PokeLogger;
use LaravelZero\Framework\Commands\Command;

/**
 * class StorePokemonRefactoredCommand
 */
class StorePokemonRefactoredCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'srp:store-pokemon-refactored';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Al guardar el registro de un pokemon, debemos generar un log. Versión refactorizada';

    /**
     * @return void
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function handle()
    {
        // Creamos la instancia de la clase pokemon
        $pokemon = new Pokemon("Eevee", "normal", ["Jolteon", "Vaporeon", "Flareon"]);

        // Utiliza una clase que contiene la responsabilidad de guardar en la base de datos
        $db = new Database($pokemon);
        $db->save();

        // Utiliza una clase que contiene la responsabilidad de generar el log
        app()->make(PokeLogger::class)->log($pokemon->serialize());

        $this->info("✅ Clase Pokemón define attributos");
        $this->info("✅ Clase Pokemón permite el acceso a los atributos");
        $this->info("✅ Clase Database tiene la responsabilidad de acceder a la base de datos");
        $this->info("✅ Clase PokeLogger tiene la responsabilidad de generar el log");
    }
}
