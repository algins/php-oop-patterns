<?php

namespace App\FactoryMethod\Logistics;

use App\FactoryMethod\Transport\Ship;
use App\FactoryMethod\Transport\Transport;

class SeaLogistics extends Logistics
{
    public function createTransport(): Transport
    {
        return new Ship();
    }
}
