<?php

namespace App\Prototype;

use App\Prototype\Mountain\Mountain;
use App\Prototype\Sea\Sea;

class Terrain
{
    public function __construct(
        private readonly Sea $sea,
        private readonly Mountain $mountain,
    ) {
    }

    public function sea(): Sea
    {
        return clone $this->sea;
    }

    public function mountain(): Mountain
    {
        return clone $this->mountain;
    }
}
