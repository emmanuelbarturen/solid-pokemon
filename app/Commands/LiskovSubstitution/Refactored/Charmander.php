<?php

namespace App\Commands\LiskovSubstitution\Refactored;

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


}
