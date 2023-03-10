<?php

namespace App\Creational\Prototype\Mountain;

abstract class Mountain
{
    public function __construct(
        private readonly int $height,
    ) {
    }

    public function height(): int
    {
        return $this->height;
    }
}
