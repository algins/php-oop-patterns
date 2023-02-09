<?php

namespace App\FactoryMethod\Transport;

abstract class Transport
{
    abstract public function deliver(): string;
}
