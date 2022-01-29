<?php

namespace App\Commands\SingleResponsability\Refactored\Logger;

use Symfony\Component\Console\Output\ConsoleOutput;

/**
 * class ConsoleLogger
 */
class ConsolePokeLogger implements PokeLogger
{
    /**
     * @var ConsoleOutput
     */
    private $output;

    /**
     * @param ConsoleOutput $output
     */
    public function __construct(ConsoleOutput $output)
    {
        $this->output = $output;
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
