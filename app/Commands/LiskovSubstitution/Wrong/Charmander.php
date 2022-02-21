<?php

namespace App\Commands\LiskovSubstitution\Wrong;

use Error;

/**
 * class Charmander
 */
class Charmander extends Pokemon
{
    /**
     * constructor
     */
    public function __construct()
    {
        parent::__construct('Charmander', 'Fire');
    }


    /**
     * @return string
     */
    public function canFly(): string
    {
        throw new Error("No puedo volar");
    }
}
