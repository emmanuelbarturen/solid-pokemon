<?php

namespace App\Commands\DependencyInversion\ImproveSRPExample\Logger;

interface PokeLogger
{
    public function log(string $message);
}
