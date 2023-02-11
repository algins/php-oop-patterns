<?php

namespace App\Tests\Structural;

use App\Structural\Composite\Army;
use App\Structural\Composite\Soldier;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testComposite(): void
    {
        $soldier = new Soldier();
        $army = new Army();

        $this->assertEquals($soldier->strength(), 1);
        $this->assertEquals($army->strength(), 0);

        $army->addUnit($soldier);
        $this->assertEquals($army->strength(), 1);

        $army->addUnit($soldier);
        $this->assertEquals($army->strength(), 1);

        $army->addUnit(new Soldier());
        $this->assertEquals($army->strength(), 2);

        $army->removeUnit($soldier);
        $this->assertEquals($army->strength(), 1);
    }
}
