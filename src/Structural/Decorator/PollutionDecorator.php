<?php

namespace App\Structural\Decorator;

class PollutionDecorator extends TileDecorator
{
    public function wealthFactor(): int
    {
        return $this->tile->wealthFactor() - 1;
    }
}
