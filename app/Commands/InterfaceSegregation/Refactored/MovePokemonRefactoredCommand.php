<?php

namespace App\Commands\InterfaceSegregation\Refactored;

use LaravelZero\Framework\Commands\Command;

/**
 * class CanFlyRawCommand
 */
class MovePokemonRefactoredCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'interface:move-pokemon-refactored';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Interface Segregation Refactored - Move Pokemon';

    /**
     * Se definió correctamente los roles de cada interfaz y se implementaron sólo los métodos que se necesitaban en cada clase.
     * @return void
     */
    public function handle()
    {
        $gyarados = new Gyarados();
        $this->info($gyarados->canFly());
        $this->info($gyarados->canSwim());

        $charizard = new Charizard();
        $this->info($charizard->canFly());

        $blastoise = new Blastoise();
        $this->info($blastoise->canSwim());
    }
}
