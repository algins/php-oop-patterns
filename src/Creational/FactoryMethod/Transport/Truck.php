<?php

namespace App\Creational\FactoryMethod\Transport;

class Truck extends Transport
{
    public function deliver(): string
    {
        return 'Delivered by Truck';
    }
}
