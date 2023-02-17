<?php

namespace App\Behavioral\Command;

class CalculatorDivideCommand implements CalculatorCommand
{
    public function __construct(
        private readonly Calculator $calculator,
    ) {
    }

    public function execute(): int
    {
        return $this->calculator->divide();
    }
}
