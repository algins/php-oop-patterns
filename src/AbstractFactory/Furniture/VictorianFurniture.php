<?php

namespace App\AbstractFactory\Furniture;

use App\AbstractFactory\Chair\Chair;
use App\AbstractFactory\Chair\VictorianChair;
use App\AbstractFactory\Sofa\Sofa;
use App\AbstractFactory\Sofa\VictorianSofa;

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
