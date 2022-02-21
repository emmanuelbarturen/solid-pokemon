<?php

namespace App\Commands\OpenClosed\Wrong;

/**
 * class Pokemon
 */
class Pokemon
{

    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $type;


    /**
     * @param string $name
     * @param string $type
     */
    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
