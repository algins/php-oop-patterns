<?php

namespace App\FactoryMethod\Transport;

class Truck extends Transport
{
    public function deliver(): string
    {
        return 'Delivered by Truck';
    }
}
