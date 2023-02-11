<?php

namespace App\Creational\FactoryMethod\Transport;

abstract class Transport
{
    abstract public function deliver(): string;
}
