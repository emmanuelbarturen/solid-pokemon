<?php

namespace App\Commands\InterfaceSegregation\Wrong;

/**
 * interface MoveInterface
 */
interface MoveInterface
{
    /**
     * @return string
     */
    public function canFly(): string;

    /**
     * @return string
     */
    public function canSwim(): string;
}
