<?php

namespace App\Commands\SingleResponsability\Wrong;

use Illuminate\Support\Facades\DB;
use SQLite3;
use Symfony\Component\Console\Output\ConsoleOutput;

/**
 * class Pokemon
 */
class Pokemon
{

	/**
	 * @var string
	 */
	private $name;
	/**
	 * @var string
	 */
	private $type;
	/**
	 * @var array
	 */
	private $evolutions;

	/**
	 * @param string $name
	 * @param string $type
	 * @param array $evolutions
	 */
	public function __construct(string $name, string $type, array $evolutions)
	{
		$this->name = $name;
		$this->type = $type;
		$this->evolutions = $evolutions;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getType(): string
	{
		return $this->type;
	}

	/**
	 * @return array
	 */
	public function getEvolutions(): array
	{
		return $this->evolutions;
	}

	/**
	 * @return string
	 */
	public function serialize(): string
	{
		return ">>> Pokemon: {$this->name}, Type: {$this->type}, Evolutions:" . implode(',', $this->evolutions);
	}

	/**
	 * Guarda los datos del pokemon en la base de datos y genera un log.
	 * Al cambiar de driver de base de datos e implementar otros métodos esta clase tendría cambios por estar acoplado.
	 * @return void
	 */
	public function saveData()
	{
		$conn = new SQLite3(database_path('database.sqlite'));
		$evolutions = implode(',', $this->getEvolutions());
		$conn->exec("insert into sp_pokemon (name, type, evolutions) values ('{$this->getName()}', '{$this->getName()}', '{$evolutions}')");

		# Generando el log
		$out = new ConsoleOutput();
		$out->writeln('Serializando ->' . $this->serialize());
	}

}
