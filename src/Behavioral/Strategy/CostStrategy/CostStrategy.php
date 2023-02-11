<?php

namespace App\Behavioral\Strategy\CostStrategy;

use App\Behavioral\Strategy\Lesson\Lesson;

abstract class CostStrategy
{
    abstract public function cost(Lesson $lesson): int;
}
