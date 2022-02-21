<?php

namespace App\Commands\OpenClosed\Wrong;

use LaravelZero\Framework\Commands\Command;

/**
 * class StorePokemonWrongCommand
 */
class AttackPokemonRawCommand extends Command
{
	/**
	 * The signature of the command.
	 *
	 * @var string
	 */
	protected $signature = 'open-close:wrong-attack-pokemon';

	/**
	 * The description of the command.
	 *
	 * @var string
	 */
	protected $description = 'Ejemplo que viola el principio Abierto/Cerrado';

	/**
	 * En este ejemplo, para agregar un nuevo pokemon tendríamos que modificar la función allPokemonAttack
	 * con una nueva opción, ya que está abierta a cambios. Esto genera el riesgo de error porque estaríamos
	 * modificando código existente, además aumentando la complejidad de la función.
	 * En esta situación al desarrollador
	 * @return void
	 */
	public function handle()
	{
		// Creamos la instancia de la clase pokemon
		$charmander = new Pokemon("Charmander", "Fire");
		$pikachu = new Pokemon("Pikáchu", "Electric");
		$squirtle = new Pokemon("Squirtle", "Water");
		$bulbasaur = new Pokemon("Bulbasaur", "Plant");

		$haunter = new Pokemon("Haunter", "Ghost"); // Este no está implementado
		$ekans = new Pokemon("Ekans", "Poison"); // Este no está implementado

		$processAttack = new ProcessAttack();
		$attacks = $processAttack->allPokemonAttack([$charmander, $pikachu, $squirtle, $bulbasaur, $haunter, $ekans]);
		foreach ($attacks as $attack) {
			$this->info($attack);
		}

		$this->error('❌ Por cada nuevo tipo de pokémon hay que modificar función allPokemonAttack');
		$this->error('❌ Mantenimiento complejo del código');
		$this->error('❌ Fácil de generar errores al agregar nuevos ataques');
	}
}
