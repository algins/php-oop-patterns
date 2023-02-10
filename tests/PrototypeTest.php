<?php

namespace App\Tests;

use App\Prototype\Mountain\EarthMountain;
use App\Prototype\Mountain\MarsMountain;
use App\Prototype\Sea\EarthSea;
use App\Prototype\Sea\MarsSea;
use App\Prototype\Terrain;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testPrototype(): void
    {
        $earthSea = new EarthSea(1000);
        $earthMountain = new EarthMountain(4000);
        $earthTerrain = new Terrain($earthSea, $earthMountain);

        $marsSea = new MarsSea(500);
        $marsMountain = new MarsMountain(2500);
        $marsTerrain = new Terrain($marsSea, $marsMountain);

        $this->assertEquals($earthTerrain->sea(), $earthSea);
        $this->assertEquals($earthTerrain->mountain(), $earthMountain);
        $this->assertEquals($marsTerrain->sea(), $marsSea);
        $this->assertEquals($marsTerrain->mountain(), $marsMountain);
    }
}
