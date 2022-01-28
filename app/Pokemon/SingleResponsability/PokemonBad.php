<?php

namespace App\Pokemon\SingleResponsability;

use Illuminate\Support\Facades\DB;

/**
 * class PokemonBad
 */
class PokemonBad
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

    /**
     * @param PokemonBad $pokemon
     * @return void
     */
    public function saveData(PokemonBad $pokemon)
    {
        DB::table('sp_pokemon')->insert([
            'name' => $pokemon->getName(),
            'type' => $pokemon->getType(),
            'evolutions' => $pokemon->getEvolutions()
        ]);
    }

}
