<?php

namespace App\Tests\Creational;

use App\Creational\FactoryMethod\Logistics\RoadLogistics;
use App\Creational\FactoryMethod\Logistics\SeaLogistics;
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
