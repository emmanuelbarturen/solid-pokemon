<?php

namespace App\Commands\SingleResponsability\Refactored;

use App\Commands\SingleResponsability\Refactored\Database;
use App\Commands\SingleResponsability\Refactored\Pokemon;
use LaravelZero\Framework\Commands\Command;

/**
 * class StorePokemonRawCommand
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
    protected $description = 'Al guardar el registro de un pokemon, debemos generar un log';

    /**
     * Single Responsability Principle
     *
     * Si una Clase contara con múltiples responsabilidades esto puede implicar que al realizar un cambio de alguna de
     * ellas puede tener como consecuencia la modificación de otras responsabilidades lo que aumenta la posibilidad de
     * incluir errores y poder afectar otras partes del sistema sin saberlo.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->option('good')) {
            // Creamos la instancia de la clase pokemon
            $pokemon = new Pokemon("Eevee", "normal", ["Jolteon", "Vaporeon", "Flareon"]);
            // Utiliza una clase que contiene la responsabilidad de guardar en la base de datos
            $db = new Database($pokemon);
            $db->save();
            $this->info("✅ Clase Pokemón define attributos");
            $this->info("✅ Clase Pokemón permite el acceso a los atributos");
            $this->info("✅ Clase Database tiene la responsabilidad de acceder a la base de datos");

        } else {
            // Creamos la instancia de la clase pokemon
            $pokemon = new Pokemon("Eevee", "normal", ["Jolteon", "Vaporeon", "Flareon"]);
            // Utiliza la misma clase para guardar en la base de datos
            $pokemon->saveData($pokemon);
            $this->info("✅ Clase Pokemón define attributos");
            $this->info("✅ Clase Pokemón permite el acceso a los atributos");
            $this->error('❌ Realiza operaciones sobre una base de datos');
        }
    }
}
