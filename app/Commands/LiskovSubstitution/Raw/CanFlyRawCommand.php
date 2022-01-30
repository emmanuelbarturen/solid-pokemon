<?php

namespace App\Commands\LiskovSubstitution\Raw;

use LaravelZero\Framework\Commands\Command;

/**
 * class CanFlyRawCommand
 */
class CanFlyRawCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'ls:can-fly-pokemon-raw';

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
        $this->error('❌ La clase charmander no puede utilizar el método canFly');
        $this->error('❌ Uno de las Sub-Clases no puede ser utilizado como una Clase Padre');

        // Creamos la instancia de la clase Charizard
        $charizard = new Charizard();
        $this->info('Hola soy: ' . $charizard->getName());
        $this->info('Soy del tipo: ' . $charizard->getType());
        $this->info('Además ' . $charizard->canFly());

        $this->info('--------------------------------');

        // Creamos la instancia de la clase Charmander
        $charmander = new Charmander();
        $this->info('Hola soy: ' . $charmander->getName());
        $this->info('Soy del tipo: ' . $charmander->getType());
        $this->info('Además ' . $charmander->canFly());
    }
}
