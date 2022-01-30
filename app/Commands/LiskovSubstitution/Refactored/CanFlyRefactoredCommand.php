<?php

namespace App\Commands\LiskovSubstitution\Refactored;

use LaravelZero\Framework\Commands\Command;

/**
 * class CanFlyRawCommand
 */
class CanFlyRefactoredCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'ls:can-fly-pokemon-refactored';

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
    }
}
