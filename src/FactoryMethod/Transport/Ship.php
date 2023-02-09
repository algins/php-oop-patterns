<?php

namespace App\FactoryMethod\Transport;

class Ship extends Transport
{
    public function deliver(): string
    {
        return 'Delivered by Ship';
    }
}
