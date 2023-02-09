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
        $seaLogistics = new SeaLogistics();

        $this->assertEquals($roadLogistics->createTransport()->deliver(), 'Delivered by Truck');
        $this->assertEquals($seaLogistics->createTransport()->deliver(), 'Delivered by Ship');
    }
}
