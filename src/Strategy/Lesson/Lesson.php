<?php

namespace App\Strategy\Lesson;

use App\Strategy\CostStrategy\CostStrategy;

abstract class Lesson
{
    public function __construct(
        private readonly int $duration,
        private readonly CostStrategy $costStrategy,
    ) {
    }

    public function duration(): int
    {
        return $this->duration;
    }

    public function cost(): int
    {
        return $this->costStrategy->cost($this);
    }
}
