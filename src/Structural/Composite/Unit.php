<?php

namespace App\Structural\Composite;

abstract class Unit
{
    abstract public function addUnit(Unit $unit): void;
    abstract public function removeUnit(Unit $unit): void;
    abstract public function strength(): int;
}
