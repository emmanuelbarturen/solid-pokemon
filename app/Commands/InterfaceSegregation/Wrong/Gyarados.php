<?php

namespace App\Commands\InterfaceSegregation\Wrong;

/**
 * class Gyarados
 */
class Gyarados extends Pokemon implements MoveInterface
{

    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct('Gyarados', 'Psychic');
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
        return $this->getName() . " Puedo nadar";
    }
}
