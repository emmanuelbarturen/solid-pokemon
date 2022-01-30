<?php

namespace App\Commands\InterfaceSegregation\Refactored;

/**
 * class Charizar
 */
class Charizard extends Pokemon
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
        return $this->getName() . " Puedo volar";
    }

    /**
     * @return string
     */
    public function canSwim(): string
    {
        return "No puedo nadar por que soy de tipo " . $this->getType();
    }
}
