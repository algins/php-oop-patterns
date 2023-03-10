<?php

namespace App\Tests\Behavioral;

use App\Behavioral\Strategy\CostStrategy\FixedCostStrategy;
use App\Behavioral\Strategy\CostStrategy\TimedCostStrategy;
use App\Behavioral\Strategy\Lesson\Lecture;
use App\Behavioral\Strategy\Lesson\Seminar;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testStrategy(): void
    {
        $timedCostSeminar = new Seminar(1, new TimedCostStrategy());
        $fixedCostSeminar = new Seminar(2, new FixedCostStrategy());
        $timedCostLecture = new Lecture(3, new TimedCostStrategy());
        $fixedCostLecture = new Lecture(4, new FixedCostStrategy());

        $this->assertEquals($timedCostSeminar->cost(), 5);
        $this->assertEquals($fixedCostSeminar->cost(), 30);
        $this->assertEquals($timedCostLecture->cost(), 15);
        $this->assertEquals($fixedCostLecture->cost(), 30);
    }
}
