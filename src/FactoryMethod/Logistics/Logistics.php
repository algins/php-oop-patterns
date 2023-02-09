<?php

namespace App\FactoryMethod\Logistics;

use App\FactoryMethod\Transport\Transport;

abstract class Logistics
{
    abstract public function createTransport(): Transport;
}
