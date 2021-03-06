<?php

namespace App\Commands\SingleResponsability\Refactored;

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
    protected $signature = 'single-responsability:refactored-store-pokemon';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Ejemplo que aplica el principio de responsabilidad única';

    /**
     * En esta versión, la clase Pokemon solo se encarga de definir al objeto.
     * La clase Database, de guardar en base de datos y PokeLogger de generar el log.
     * @return void
     */
    public function handle()
    {
        // Creamos la instancia de la clase pokemon
	    $pokemon = new Pokemon("pikachu", "electric", ["Raichu"]);

        // Utiliza una clase que contiene la responsabilidad de guardar en la base de datos
        $db = new Database($pokemon);
        $db->save();

        // Utiliza una clase que contiene la responsabilidad de generar el log
        $logger = new PokeLogger();
        $logger->log($pokemon->serialize());

        $this->info("✅ Clase Pokemón define attributos");
        $this->info("✅ Clase Pokemón permite el acceso a los atributos");
        $this->info("✅ Clase Database tiene la responsabilidad de acceder a la base de datos");
        $this->info("✅ Clase PokeLogger tiene la responsabilidad de generar el log");
    }
}
