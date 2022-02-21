<?php

namespace App\Commands\OpenClosed\Refactored;

/**
 * class WaterType
 */
class WaterType extends Pokemon
{

	/**
	 * @param string $name
	 */
	public function __construct(string $name)
	{
		parent::__construct($name, 'Water');
	}

	/**
	 * @return string
	 */
	public function getAttack(): string
	{
		return $this->getName() . ' ➜ Pitsola de agua 🔫💦';
	}
}
