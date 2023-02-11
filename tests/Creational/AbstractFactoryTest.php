<?php

namespace App\Tests\Creational;

use App\Creational\AbstractFactory\Furniture\ModernFurniture;
use App\Creational\AbstractFactory\Furniture\VictorianFurniture;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testAbstractFactory(): void
    {
        $modernFurniture = new ModernFurniture();
        $modernChair = $modernFurniture->createChair();
        $modernSofa = $modernFurniture->createSofa();

        $victorianFurniture = new VictorianFurniture();
        $victorianChair = $victorianFurniture->createChair();
        $victorianSofa = $victorianFurniture->createSofa();

        $this->assertEquals($modernChair->isAntique(), false);
        $this->assertEquals($modernChair->numberOfSeats(), 1);
        $this->assertEquals($modernSofa->isAntique(), false);
        $this->assertEquals($modernSofa->numberOfSeats(), 2);
        $this->assertEquals($victorianChair->isAntique(), true);
        $this->assertEquals($victorianChair->numberOfSeats(), 1);
        $this->assertEquals($victorianSofa->isAntique(), true);
        $this->assertEquals($victorianSofa->numberOfSeats(), 2);
    }
}
