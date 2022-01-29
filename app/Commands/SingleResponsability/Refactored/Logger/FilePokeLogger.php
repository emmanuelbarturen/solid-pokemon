<?php

namespace App\Commands\SingleResponsability\Refactored\Logger;

use Illuminate\Support\Facades\Log;

/**
 * class FileLogger
 */
class FilePokeLogger implements PokeLogger
{

    /**
     * @var Log
     */
    private $log;

    /**
     * @param Log $log
     */
    public function __construct(Log $log)
    {
        $this->log = $log;
    }

    /**
     * @param string $message
     * @return void
     */
    public function log(string $message)
    {
        $this->log->info($message);
    }
}
