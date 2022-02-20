<?php

namespace App\Commands\OpenClosed\Refactored;

/**
 * class TypeFire
 */
class TypeGhost extends Pokemon
{

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct($name, 'Ghost');
    }

    /**
     * @return string
     */
    public function getAttack(): string
    {
        return $this->getName() . ' ➜ Atake susto';
    }

}
