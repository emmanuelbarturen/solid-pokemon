<?php

namespace App\Commands\InterfaceSegregation\Wrong;

use Exception;

/**
 * class Charizar
 */
class Charizard extends Pokemon implements MoveInterface
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
     * Este método no debería ser heredado
     * @return string
     * @throws Exception
     */
    public function canSwim(): string
    {
        throw new Exception("Charizard no puede nadar");
    }
}
