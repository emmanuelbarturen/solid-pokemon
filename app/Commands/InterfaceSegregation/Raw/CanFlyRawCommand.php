<?php

namespace App\Commands\InterfaceSegregation\Raw;

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
        $this->info($charizard->canFly());
        $this->info($charizard->canSwim());

        $this->info('--------------------------------');

        // Creamos la instancia de la clase Charmander
        $blastoise = new Blastoise();
        $this->info($blastoise->canFly());
        $this->info($blastoise->canSwim());

        $this->error('❌ La clase Pokemon contiene métodos que no son 100% aplicables');
        $this->error('❌ Las subclases pueden ser afectadas por los métodos que no utilizan');
        $this->error('❌ Claramente se rompe mas de un principio SOLID');
    }
}
