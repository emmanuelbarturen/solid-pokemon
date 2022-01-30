<?php

namespace App\Commands\OpenClosed\Refactored;

use LaravelZero\Framework\Commands\Command;

/**
 * class StorePokemonRawCommand
 */
class AttackPokemonRefactorCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'ocp:attack-pokemon-refactor';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = '';

    /**
     * @return void
     */
    public function handle()
    {
        // Creamos una instancia de la clase ProcessAttack
        $processAttack = new ProcessAttack();

        // invocamos al método allPokemonAttack y enviamos las instancia de la clase pokemon
        $attacks = $processAttack->allPokemonAttack([
            new TypeFire("Flareon"),
            new TypeElectric("Jolteon"),
            new TypeWater("Vaporeon"),
        ]);

        foreach ($attacks as $attack) {
            $this->info($attack);
        }

    }
}
