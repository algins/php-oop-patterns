<?php

namespace App\Tests;

use App\FactoryMethod\Logistics\RoadLogistics;
use App\FactoryMethod\Logistics\SeaLogistics;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testFactoryMethod(): void
    {
        $roadLogistics = new RoadLogistics();
        $truck = $roadLogistics->createTransport();

        $seaLogistics = new SeaLogistics();
        $ship = $seaLogistics->createTransport();

        $this->assertEquals($truck->deliver(), 'Delivered by Truck');
        $this->assertEquals($ship->deliver(), 'Delivered by Ship');
    }
}
