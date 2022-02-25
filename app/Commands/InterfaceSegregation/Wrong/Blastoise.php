<?php

namespace App\Commands\InterfaceSegregation\Wrong;

use Exception;

/**
 * class Blastoise
 */
class Blastoise extends Pokemon implements MoveInterface
{
    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct('Blastoise', 'Water');
    }

    /**
     * @return string
     * @throws Exception
     */
    public function canFly(): string
    {
        throw new Exception("No puedo volar por que soy de tipo " . $this->getType());
    }

    /**
     * @return string
     */
    public function canSwim(): string
    {
        return 'Soy   ' . $this->getName() . ' y puedo nadar.';
    }
}
