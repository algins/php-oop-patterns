<?php

namespace App\Creational\FactoryMethod\Logistics;

use App\Creational\FactoryMethod\Transport\Transport;
use App\Creational\FactoryMethod\Transport\Truck;

class RoadLogistics extends Logistics
{
    public function createTransport(): Transport
    {
        return new Truck();
    }
}
