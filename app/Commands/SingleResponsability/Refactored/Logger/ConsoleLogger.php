<?php

namespace App\Commands\SingleResponsability\Refactored\Logger;

class ConsoleLogger implements Logger
{
    public function log(string $message): void
    {
        echo $message;
    }
}
