<?php

namespace App\Commands\OpenClosed\Refactored;

use LaravelZero\Framework\Commands\Command;

/**
 * class StorePokemonWrongCommand
 */
class AttackPokemonRefactorCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'ocp:attack-pokemon-refactored';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Open/Close Attack Pokemon Refactored';

    /**
     * En esta versión, la función allPokemonAttack no se modifica, ya que todas las clases y subclases que ingresan al array deben
     * extender de la clase Pokemon quien tiene una función que obtiene el ataque. Esto hacer que la función allPokemonAttack sea
     * abierto para extender pero cerrado para ser modificado.
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
            new TypeGhost("Hunter"),
        ]);

        foreach ($attacks as $attack) {
            $this->info($attack);
        }

    }
}
