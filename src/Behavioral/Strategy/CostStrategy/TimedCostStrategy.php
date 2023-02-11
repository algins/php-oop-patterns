<?php

namespace App\Behavioral\Strategy\CostStrategy;

use App\Behavioral\Strategy\Lesson\Lesson;

class TimedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson): int
    {
        return $lesson->duration() * 5;
    }
}
