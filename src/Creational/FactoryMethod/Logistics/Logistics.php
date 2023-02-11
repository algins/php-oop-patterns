<?php

namespace App\Creational\FactoryMethod\Logistics;

use App\Creational\FactoryMethod\Transport\Transport;

abstract class Logistics
{
    abstract public function createTransport(): Transport;
}
