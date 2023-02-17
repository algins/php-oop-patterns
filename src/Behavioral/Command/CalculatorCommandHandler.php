<?php

namespace App\Behavioral\Command;

class CalculatorCommandHandler
{
    public function __construct(
        private readonly CalculatorCommand $command,
    ) {
    }

    public function handle(): int
    {
        return $this->command->execute();
    }
}
