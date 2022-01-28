<?php

namespace App\Pokemon\SingleResponsability;

use Illuminate\Support\Facades\DB;

/**
 *
 */
class Database
{
    /**
     * @var PokemonGood
     */
    private $pokemon;

    /**
     * @param PokemonGood $pokemon
     */
    public function __construct(PokemonGood $pokemon)
    {
        $this->pokemon = $pokemon;
    }


    /**
     * @return void
     */
    public function save()
    {
        $pokemon = $this->pokemon;
        DB::table('sp_pokemon')->insert([
            'name' => $pokemon->getName(),
            'type' => $pokemon->getType(),
            'evolutions' => implode(',', $pokemon->getEvolutions())
        ]);
    }

    /**
     * @return void
     */
    public function find()
    {
        //TODO
    }
}
