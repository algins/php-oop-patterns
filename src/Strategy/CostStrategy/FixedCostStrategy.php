<?php

namespace App\Strategy\CostStrategy;

use App\Strategy\Lesson\Lesson;

class FixedCostStrategy extends CostStrategy
{
    public function cost(Lesson $lesson): int
    {
        return 30;
    }
}
