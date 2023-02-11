<?php

namespace App\Structural\Composite;

use Exception;

class Soldier extends Unit
{
    private array $units = [];

    public function addUnit(Unit $unit): void
    {
        throw new Exception('Unit cannot be added!');
    }

    public function removeUnit(Unit $unit): void
    {
        throw new Exception('Unit cannot be removed!');
    }

    public function strength(): int
    {
        return 1;
    }
}
