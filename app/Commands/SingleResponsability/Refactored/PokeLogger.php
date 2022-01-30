<?php

namespace App\Commands\SingleResponsability\Refactored;

use Symfony\Component\Console\Output\ConsoleOutput;

/**
 * class PokeLogger
 */
class PokeLogger
{
    /**
     * @var ConsoleOutput
     */
    private $output;

    /**
     */
    public function __construct()
    {
        $this->output = new ConsoleOutput();
    }


    /**
     * @param string $message
     * @return void
     */
    public function log(string $message)
    {
        $this->output->writeln($message);
    }
}
