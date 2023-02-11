<?php

namespace App\Behavioral\Strategy\CostStrategy;

use App\Behavioral\Strategy\Lesson\Lesson;

class FixedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson): int
    {
        return 30;
    }
}
