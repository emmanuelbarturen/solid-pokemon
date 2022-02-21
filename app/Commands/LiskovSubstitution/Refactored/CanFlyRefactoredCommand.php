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
	protected $signature = 'liskov:can-fly-pokemon-refactored';

	/**
	 * La herencia de la clase Charmander y Charizard fueron correctamente escogidas porque ambas clases cumplen las
	 * implementaciones de todos los métodos de sus clases padres
	 *
	 * @var string
	 */
	protected $description = 'Liskov Substitution - Can Fly Pokemon Refactored';

	/**
	 *
	 * @return void
	 */
	public function handle()
	{
		// Creamos la instancia de la clase Charizard y mostramos todos sus atributos
		$charizard = new Charizard();
		$this->info('Hola soy: ' . $charizard->getName());
		$this->info('Soy del tipo: ' . $charizard->getType());
		$this->info('Además ' . $charizard->canFly());
		$this->info('-- Reemplazamos la subClase  (Charizar) por la superClase (PokemonFly) --');
		$charizard = new PokemonFly('Charizard', 'Fire');
		$this->info('Hola soy: ' . $charizard->getName());
		$this->info('Soy del tipo: ' . $charizard->getType());
		$this->info('Además ' . $charizard->canFly());


		$this->info('------------------------------------');
		// Creamos la instancia de la clase Charmander y mostramos todos sus atributos
		$charmander = new Charmander();
		$this->info('Hola soy: ' . $charmander->getName());
		$this->info('Soy del tipo: ' . $charmander->getType());
		$this->info('-- Reemplazamos la subClase (Charmander) por la superClase (Pokemon) --');
		$charmander = new Pokemon('Charmander', 'Fire');
		$this->info('Hola soy: ' . $charmander->getName());
		$this->info('Soy del tipo: ' . $charmander->getType());
	}
}
