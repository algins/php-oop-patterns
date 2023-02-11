<?php

namespace App\Creational\FactoryMethod\Transport;

class Ship extends Transport
{
    public function deliver(): string
    {
        return 'Delivered by Ship';
    }
}
