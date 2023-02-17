<?php

namespace App\Behavioral\Command;

class Calculator
{
    public function __construct(
        private readonly int $num1,
        private readonly int $num2,
    ) {
    }

    public function add(): int
    {
        return $this->num1 + $this->num2;
    }

    public function subtract(): int
    {
        return $this->num1 - $this->num2;
    }

    public function multiply(): int
    {
        return $this->num1 * $this->num2;
    }

    public function divide(): int
    {
        return $this->num1 / $this->num2;
    }
}
