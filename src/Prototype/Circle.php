<?php

namespace App\Prototype;

class Circle extends Shape
{
    public function __construct(
        private readonly int $radius,
    ) {
    }

    public function radius(): int
    {
        return $this->radius;
    }
}
