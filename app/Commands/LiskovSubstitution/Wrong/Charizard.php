<?php

namespace App\Commands\LiskovSubstitution\Wrong;

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
}
