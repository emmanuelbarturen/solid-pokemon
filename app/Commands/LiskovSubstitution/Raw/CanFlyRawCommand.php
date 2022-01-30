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
     * La clase Charmander no debería heredar de pokemon ya que tiene una función que no puede ser implementada por Charmander (canFly).
     * Esto obliga a sobreescribir la función canFly para asegurar que no haya mal uso.
     *
     * @var string
     */
    protected $description = 'Liskov Substitution: Can Fly Pokemon Raw';

    /**
     *
     * @return void
     */
    public function handle()
    {
        // Creamos la instancia de la clase Padre (Pokemon)
        $charizard = new Pokemon("Charizard", "Fire");
        $this->info('Hola soy: ' . $charizard->getName());
        $this->info('Soy del tipo: ' . $charizard->getType());
        $this->info('Además ' . $charizard->canFly());

        $this->info('--------------------------------');

        // Creamos la instancia de la clase Charmander
        $charmander = new Charmander();
        $this->info('Hola soy: ' . $charmander->getName());
        $this->info('Soy del tipo: ' . $charmander->getType());
        $this->info('Además ' . $charmander->canFly()); // Error: No puedo volar
    }
}
