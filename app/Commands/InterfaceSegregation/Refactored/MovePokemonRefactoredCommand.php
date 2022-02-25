<?php

namespace App\Commands\InterfaceSegregation\Refactored;

use App\Commands\InterfaceSegregation\Refactored\Contracts\PokemonFlyInterface;
use App\Commands\InterfaceSegregation\Refactored\Contracts\PokemonWaterInterface;
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
		$this->moveFlyPokemon($gyarados);
		$this->moveWaterPokemon($gyarados);

		$charizard = new Charizard();
		$this->moveFlyPokemon($charizard);

		$blastoise = new Blastoise();
		$this->moveWaterPokemon($blastoise);
	}

	/**
	 * @param PokemonFlyInterface $pokemon
	 * @return void
	 */
	public function moveFlyPokemon(PokemonFlyInterface $pokemon)
	{
		$response = $pokemon->canFly();
		$this->info("{$pokemon->getName()} {$response}");
	}

	/**
	 * @param PokemonWaterInterface $pokemon
	 * @return void
	 */
	public function moveWaterPokemon(PokemonWaterInterface $pokemon)
	{
		$response = $pokemon->canSwim();
		$this->info("{$pokemon->getName()} {$response}");
	}

}
