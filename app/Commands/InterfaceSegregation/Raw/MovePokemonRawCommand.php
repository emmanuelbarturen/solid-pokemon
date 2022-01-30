<?php

namespace App\Commands\InterfaceSegregation\Raw;

use LaravelZero\Framework\Commands\Command;

/**
 * class CanFlyRawCommand
 */
class MovePokemonRawCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'ls:move-pokemon-refactored';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Interface Segregation move pokemon';

    /**
     * La interfaz MoveInterface fue creada a partir de una implementación (Mew) y no de un rol o cliente y obliga a sus clases
     * implementar métodos que no son necesarios. Las interfaces no deberían ser tan genéricas y deben tener un rol bien definido.
     * Esto viola el principio de segregación de interfaces.
     * @return void
     * @throws \Exception
     */
    public function handle()
    {
        $this->error('❌ La interfaz MoveInterfaz considera más de un rol');
        $this->error('❌ Las subclases pueden ser afectadas por los métodos que no utilizan');

        $gyarados = new Gyarados();
        $this->info($gyarados->canFly());
        $this->info($gyarados->canSwim());

        $charizard = new Charizard();
        $this->info($charizard->canFly());
        $this->info($charizard->canSwim());

        $blastoise = new Blastoise();
        $this->info($blastoise->canFly());
        $this->info($blastoise->canSwim());


    }
}
