<?php

namespace App\Commands\InterfaceSegregation\Raw;

/**
 * class Blastoise
 */
class Blastoise extends Pokemon
{
    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct('Charizard', 'Fire');
    }

    /**
     * @return string
     */
    public function canFly(): string
    {
        return "No puedo volar por que soy de tipo " . $this->getType();
    }

    /**
     * @return string
     */
    public function canSwim(): string
    {
        return 'Soy   ' . $this->getName() . ' y puedo nadar.';
    }
}
