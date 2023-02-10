<?php

namespace App\Prototype;

class Rectangle extends Shape
{
    public function __construct(
        private readonly int $height,
        private readonly int $width,
    ) {
    }

    public function height(): int
    {
        return $this->height;
    }

    public function width(): int
    {
        return $this->width;
    }
}
