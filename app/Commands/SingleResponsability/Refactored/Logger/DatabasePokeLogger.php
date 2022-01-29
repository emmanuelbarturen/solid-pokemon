<?php

namespace App\Commands\SingleResponsability\Refactored\Logger;

use Illuminate\Support\Facades\DB;

/**
 * class DatabaseLogger
 */
class DatabasePokeLogger implements PokeLogger
{


    /**
     * @var DB
     */
    private $db;

    /**
     * @param DB $db
     */
    public function __construct(DB $db)
    {
        $this->db = $db;
    }


    /**
     * @param string $message
     * @return void
     */
    public function log(string $message)
    {
        $this->db->table('logs')->insert([
            'message' => $message
        ]);
    }
}
