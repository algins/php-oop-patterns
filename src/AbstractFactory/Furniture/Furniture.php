<?php

namespace App\AbstractFactory\Furniture;

use App\AbstractFactory\Chair\Chair;
use App\AbstractFactory\Sofa\Sofa;

abstract class Furniture
{
    abstract public function createChair(): Chair;
    abstract public function createSofa(): Sofa;
}
