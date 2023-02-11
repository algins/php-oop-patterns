<?php

namespace App\Structural\Decorator;

class Plains extends Tile
{
    public function wealthFactor(): int
    {
        return 1;
    }
}
