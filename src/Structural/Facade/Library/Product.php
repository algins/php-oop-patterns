<?php

namespace App\Structural\Facade\Library;

class Product
{
    public function __construct(
        private readonly string $id,
        private readonly string $name,
    ) {
    }

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }
}
