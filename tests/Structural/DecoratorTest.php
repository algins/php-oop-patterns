<?php

namespace App\Tests\Structural;

use App\Structural\Decorator\DiamondDecorator;
use App\Structural\Decorator\Plains;
use App\Structural\Decorator\PollutionDecorator;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testDecorator(): void
    {
        $plains = new Plains();
        $diamondPlains = new DiamondDecorator($plains);
        $pollutionPlains = new PollutionDecorator($plains);
        $pollutionDiamondPlains = new PollutionDecorator($diamondPlains);

        $this->assertEquals($plains->wealthFactor(), 1);
        $this->assertEquals($diamondPlains->wealthFactor(), 2);
        $this->assertEquals($pollutionPlains->wealthFactor(), 0);
        $this->assertEquals($pollutionDiamondPlains->wealthFactor(), 1);
    }
}
