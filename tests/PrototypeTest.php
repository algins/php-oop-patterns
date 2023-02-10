<?php

namespace App\Tests;

use App\Prototype\Circle;
use App\Prototype\Rectangle;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testPrototype(): void
    {
        $circle1 = new Circle(10);
        $circle2 = $circle1->clone();

        $rectangle1 = new Rectangle(3, 5);
        $rectangle2 = $rectangle1->clone();

        $this->assertEquals($circle1->radius(), $circle2->radius());
        $this->assertEquals($rectangle1->height(), $rectangle2->height());
        $this->assertEquals($rectangle1->width(), $rectangle2->width());
    }
}
