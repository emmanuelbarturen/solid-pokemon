<?php

namespace App\Commands\DependencyInversion\ImproveSRPExample;

use Illuminate\Support\Facades\DB;

/**
 *
 */
class Database
{
    /**
     * @var Pokemon
     */
    private $pokemon;

    /**
     * @param Pokemon $pokemon
     */
    public function __construct(Pokemon $pokemon)
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
}
