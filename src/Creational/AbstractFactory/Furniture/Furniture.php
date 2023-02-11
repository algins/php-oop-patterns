<?php

namespace App\Creational\AbstractFactory\Furniture;

use App\Creational\AbstractFactory\Chair\Chair;
use App\Creational\AbstractFactory\Sofa\Sofa;

abstract class Furniture
{
    abstract public function createChair(): Chair;
    abstract public function createSofa(): Sofa;
}
