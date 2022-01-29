<?php

namespace App\Commands\SingleResponsability\Refactored;

/**
 * class PokemonGood
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
     * @var array
     */
    private $evolutions;

    /**
     * @param string $name
     * @param string $type
     * @param array $evolutions
     */
    public function __construct(string $name, string $type, array $evolutions)
    {
        $this->name = $name;
        $this->type = $type;
        $this->evolutions = $evolutions;
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

    /**
     * @return array
     */
    public function getEvolutions(): array
    {
        return $this->evolutions;
    }

}