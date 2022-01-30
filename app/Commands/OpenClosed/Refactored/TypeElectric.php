<?php

namespace App\Commands\OpenClosed\Refactored;

/**
 * class TypeElectric
 */
class TypeElectric extends Pokemon
{

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct($name, 'Electric');
    }

    /**
     * @return string
     */
    public function getAttack(): string
    {
        return $this->getName() . ' ➜ Impactrueno ⚡️';
    }

}
