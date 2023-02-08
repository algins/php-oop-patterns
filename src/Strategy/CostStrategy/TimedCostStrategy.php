<?php

namespace App\Strategy\CostStrategy;

use App\Strategy\Lesson\Lesson;

class TimedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson): int
    {
        return $lesson->duration() * 5;
    }
}
