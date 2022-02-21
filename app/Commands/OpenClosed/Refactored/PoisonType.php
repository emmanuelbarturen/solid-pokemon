<?php

namespace App\Commands\OpenClosed\Refactored;

/**
 * class PoisonType
 */
class PoisonType extends Pokemon
{

	/**
	 * @param string $name
	 */
	public function __construct(string $name)
	{
		parent::__construct($name, 'Poison');
	}

	/**
	 * @return string
	 */
	public function getAttack(): string
	{
		return $this->getName() . ' ➜ Poison Gas';
	}

}
