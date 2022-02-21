<?php

namespace App\Commands\LiskovSubstitution\Wrong;

use LaravelZero\Framework\Commands\Command;

/**
 * class CanFlyWrongCommand
 */
class CanFlyWrongCommand extends Command
{
	/**
	 * The signature of the command.
	 *
	 * @var string
	 */
	protected $signature = 'liskov:wrong-can-fly-pokemon';

	/**
	 * La clase Charmander no debería heredar de pokemon ya que tiene una función que no puede ser implementada por Charmander (canFly).
	 * Esto obliga a sobreescribir la función canFly para asegurar que no haya mal uso.
	 *
	 * @var string
	 */
	protected $description = 'Ejemplo que viola el principio de Liskov Substitution';

	/**
	 *
	 * @return void
	 */
	public function handle()
	{
		// Creamos la instancia de la clase Padre (Pokemon)
		$charizard = new Charizard();
		$this->info('Hola soy: ' . $charizard->getName());
		$this->info('Soy del tipo: ' . $charizard->getType());
		$this->info('Además ' . $charizard->canFly());

		$this->info('-- Reemplazamos la subClase (Charizar) por su superClase (Pokemon) --');

		// Reemplazamos la clase Charmander por la superClase Pokemon
		$charmander = new Pokemon("Charizard", "Fire");
		$this->info('Hola soy: ' . $charmander->getName());
		$this->info('Soy del tipo: ' . $charmander->getType());
		$this->info('Además ' . $charmander->canFly()); // Charmander no debería tener un comportamiento de volar.

		$this->info('------------------------------------');
		// Instanciamos la subClase Charmander
		$charmander = new Charmander();
		$this->info('Hola soy: ' . $charmander->getName());
		$this->info('Soy del tipo: ' . $charmander->getType());

		$this->info('-- Reemplazamos la subClase (Charmander) por su superClase (Pokemon) --');

		$charmander = new Pokemon("Charmander", "Fire");
		$this->info('Hola soy: ' . $charmander->getName());
		$this->info('Soy del tipo: ' . $charmander->getType());
		$this->info('Además ' . $charmander->canFly()); //
		$this->error('❌ Charmander no debería tener un comportamiento de volar.');
	}
}
