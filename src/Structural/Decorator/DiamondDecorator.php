<?php

namespace App\Structural\Decorator;

class DiamondDecorator extends TileDecorator
{
    public function wealthFactor(): int
    {
        return $this->tile->wealthFactor() + 1;
    }
}
