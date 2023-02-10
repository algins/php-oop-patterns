<?php

namespace App\Prototype\Sea;

abstract class Sea
{
    public function __construct(
        private readonly int $depth,
    ) {
    }

    public function depth(): int
    {
        return $this->depth;
    }
}
