<?php

namespace App\Commands;

use App\Pokemon\SingleResponsability\Database;
use App\Pokemon\SingleResponsability\PokemonBad;
use App\Pokemon\SingleResponsability\PokemonGood;
use LaravelZero\Framework\Commands\Command;

/**
 * class SingleResponsabilityCommand
 */
class SingleResponsabilityCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'sp:evee {--good}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Una Clase solo debe tener solo una razón para cambiar, esto quiere decir que una clase solo debe contar con una sola responsabilidad';

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
            $pokemon = new PokemonGood("Eevee", "normal", ["Jolteon", "Vaporeon", "Flareon"]);
            // Utiliza una clase que contiene la responsabilidad de guardar en la base de datos
            $db = new Database($pokemon);
            $db->save();
            $this->info("✅ Clase Pokemón define attributos");
            $this->info("✅ Clase Pokemón permite el acceso a los atributos");
            $this->info("✅ Clase Database tiene la responsabilidad de acceder a la base de datos");

        } else {
            // Creamos la instancia de la clase pokemon
            $pokemon = new PokemonBad("Eevee", "normal", ["Jolteon", "Vaporeon", "Flareon"]);
            // Utiliza la misma clase para guardar en la base de datos
            $pokemon->saveData($pokemon);
            $this->info("✅ Clase Pokemón define attributos");
            $this->info("✅ Clase Pokemón permite el acceso a los atributos");
            $this->error('❌ Realiza operaciones sobre una base de datos');
        }
    }
}
