<?php

namespace App\Creational\FactoryMethod\Logistics;

use App\Creational\FactoryMethod\Transport\Ship;
use App\Creational\FactoryMethod\Transport\Transport;

class SeaLogistics extends Logistics
{
    public function createTransport(): Transport
    {
        return new Ship();
    }
}
