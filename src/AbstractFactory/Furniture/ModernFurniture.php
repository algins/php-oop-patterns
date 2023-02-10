<?php

namespace App\AbstractFactory\Furniture;

use App\AbstractFactory\Chair\Chair;
use App\AbstractFactory\Chair\ModernChair;
use App\AbstractFactory\Sofa\ModernSofa;
use App\AbstractFactory\Sofa\Sofa;

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
