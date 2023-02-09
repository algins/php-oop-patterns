<?php

namespace App\FactoryMethod\Logistics;

use App\FactoryMethod\Transport\Transport;
use App\FactoryMethod\Transport\Truck;

class RoadLogistics extends Logistics
{
    public function createTransport(): Transport
    {
        return new Truck();
    }
}
