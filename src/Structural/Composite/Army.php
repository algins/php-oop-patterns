<?php

namespace App\Structural\Composite;

class Army extends Unit
{
    private array $units = [];

    public function addUnit(Unit $unit): void
    {
        if (!in_array($unit, $this->units, true)) {
            $this->units[] = $unit;
        }
    }

    public function removeUnit(Unit $unit): void
    {
        $this->units = array_filter($this->units, fn($u) => $u !== $unit);
    }

    public function strength(): int
    {
        return array_reduce($this->units, fn($acc, $u) => $acc + $u->strength(), 0);
    }
}
