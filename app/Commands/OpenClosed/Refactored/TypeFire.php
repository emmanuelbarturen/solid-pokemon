<?php

namespace App\Commands\OpenClosed\Refactored;

/**
 * class TypeFire
 */
class TypeFire extends Pokemon
{

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct($name, 'Fire');
    }

    /**
     * @return string
     */
    public function getAttack(): string
    {
        return $this->getName() . ' ➜ Aliento igneo 🔥';
    }

}
