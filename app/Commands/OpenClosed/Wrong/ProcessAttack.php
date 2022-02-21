<?php

namespace App\Commands\OpenClosed\Wrong;

/**
 * class ProcessAttack
 */
class ProcessAttack
{
	/**
	 * Función que procesa el ataque de cada tipo de pokemon
	 * Para cada tipo nuevo hay que modificar la función. Esto viola el principio de abierto para extensión, cerrado para modificación.
	 *
	 * @param array $pokemonList
	 * @return array
	 */
	public function allPokemonAttack(array $pokemonList): array
	{
		$output = [];
		foreach ($pokemonList as $pokemon) {
			switch ($pokemon->getType()) {
				case "Electric":
					//Este comportamiento podría ser muy complejo y hacer difícil de mantener y entender en su conjunto por cada case.
					// Además podría crecer demasiado
					$attack = "Impactrueno ⚡️";
					break;
				case "Fire":
					$attack = "Lanza Llamas 🔥";
					break;
				case "Water":
					$attack = "Pistola de agua 🔫💦";
					break;
				case "Plant":
					$attack = "Látigo Cepa 🍃";
					break;
				default:
					$attack = "Ataque base";
			}

			$output[] = $pokemon->getName() . ' ➜ ' . $attack;
		}

		return $output;
	}
}
