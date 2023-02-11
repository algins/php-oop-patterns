<?php

namespace App\Creational\Prototype;

use App\Creational\Prototype\Mountain\Mountain;
use App\Creational\Prototype\Sea\Sea;

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
