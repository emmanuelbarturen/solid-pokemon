<?php

namespace App\Commands\OpenClosed\Raw;

use LaravelZero\Framework\Commands\Command;

/**
 * class StorePokemonRawCommand
 */
class AttackPokemonRawCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'ocp:attack-pokemon-raw';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Open/Close Raw Attack Pokemon';

    /**
     * En este ejemplo, para agregar un nuevo pokemon tendríamos que modificar la función allPokemonAttack
     * con una nueva opción, ya que está abierta a cambios. Esto genera el riesgo de error porque estaríamos
     * modificando código existente, además aumentando la complejidad de la función.
     * @return void
     */
    public function handle()
    {
        // Creamos la instancia de la clase pokemon
        $flareon = new Pokemon("Flareon", "Fire");
        $jolteon = new Pokemon("Jolteon", "Electric");
        $vaporeon = new Pokemon("Vaporeon", "Water");
        $hunter = new Pokemon("Hunter", "Ghost"); // Este no está implementado

        // Creamos una instancia de la clase ProcessAttack
        $processAttack = new ProcessAttack();

        // invocamos al método allPokemonAttack y enviamos las instancia de la clase pokemon
        $attacks = $processAttack->allPokemonAttack([$flareon, $jolteon, $vaporeon, $hunter]);
        foreach ($attacks as $attack) {
            $this->info($attack);
        }

        $this->error('❌ Por cada nuevo tipo de pokémon hay que generar cambios');
        $this->error('❌ Mantenimiento complejo del código');
        $this->error('❌ Fácil de generar errores al agregar nuevos ataques');
    }
}
