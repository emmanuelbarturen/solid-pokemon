<?php

namespace App\Commands\OpenClosed\Refactored;

/**
 * class BugType
 */
class BugType extends Pokemon
{

	/**
	 * @param string $name
	 */
	public function __construct(string $name)
	{
		parent::__construct($name, 'Bug');
	}

	/**
	 * @return string
	 */
	public function getAttack(): string
	{
		return $this->getName() . ' ➜ Bug Bite';
	}

}
