<?php

namespace App\Structural\Decorator;

abstract class TileDecorator extends Tile
{
    public function __construct(
        protected readonly Tile $tile,
    ) {
    }
}
