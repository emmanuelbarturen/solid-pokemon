<?php

namespace App\Commands\LiskovSubstitution\Raw;

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
