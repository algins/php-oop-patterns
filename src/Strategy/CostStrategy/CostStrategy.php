<?php

namespace App\Strategy\CostStrategy;

use App\Strategy\Lesson\Lesson;

abstract class CostStrategy
{
    abstract public function cost(Lesson $lesson): int;
}
