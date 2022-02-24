<?php

namespace App\Commands\SingleResponsability\Wrong;

use LaravelZero\Framework\Commands\Command;

/**
 * class StorePokemonWrongCommand
 */
class StorePokemonWrongCommand extends Command
{
	/**
	 * The signature of the command.
	 *
	 * @var string
	 */
	protected $signature = 'single-responsability:wrong-store-pokemon';

	/**
	 * The description of the command.
	 *
	 * @var string
	 */
	protected $description = 'Ejemplo que viola el principio de responsabilidad única';

	/**
	 * Este desarrollo mezcla tres conceptos diferentes: lógica de negocio, lógica de persistencia y lógica logging.
	 * Lo que lo hace altamente propenso al cambio. A mayor cambio en el código, mayor es la complejidad y mayor es el riesgo de fallo.
	 * @return void
	 */
	public function handle()
	{
		// Creamos la instancia de la clase pokemon y guardamos
		$pokemon = new Pokemon("pikachu", "electric", ["Raichu"]);
		$pokemon->saveData();
		$this->info("✅ Clase Pokemón define attributos");
		$this->info("✅ Clase Pokemón permite el acceso a los atributos");
		$this->error('❌ La clase Pokémon también tiene la responsabilidad de guardar en base de datos');
		$this->error('❌ La clase Pokémon también tiene la responsabilidad de generar un log por consola');
	}
}
