<?php

namespace App\Creational\AbstractFactory\Furniture;

use App\Creational\AbstractFactory\Chair\Chair;
use App\Creational\AbstractFactory\Chair\VictorianChair;
use App\Creational\AbstractFactory\Sofa\Sofa;
use App\Creational\AbstractFactory\Sofa\VictorianSofa;

class VictorianFurniture extends Furniture
{
    public function createChair(): Chair
    {
        return new VictorianChair();
    }

    public function createSofa(): Sofa
    {
        return new VictorianSofa();
    }
}
