<?php

namespace App\Behavioral\Command;

class CalculatorMultiplyCommand implements CalculatorCommand
{
    public function __construct(
        private readonly Calculator $calculator,
    ) {
    }

    public function execute(): int
    {
        return $this->calculator->multiply();
    }
}
