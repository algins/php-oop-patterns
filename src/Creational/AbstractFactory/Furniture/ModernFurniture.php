<?php

namespace App\Creational\AbstractFactory\Furniture;

use App\Creational\AbstractFactory\Chair\Chair;
use App\Creational\AbstractFactory\Chair\ModernChair;
use App\Creational\AbstractFactory\Sofa\ModernSofa;
use App\Creational\AbstractFactory\Sofa\Sofa;

class ModernFurniture extends Furniture
{
    public function createChair(): Chair
    {
        return new ModernChair();
    }

    public function createSofa(): Sofa
    {
        return new ModernSofa();
    }
}
