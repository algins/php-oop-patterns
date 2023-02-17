<?php

namespace App\Tests\Command;

use App\Behavioral\Command\Calculator;
use App\Behavioral\Command\CalculatorAddCommand as AddCommand;
use App\Behavioral\Command\CalculatorCommandHandler as CommandHandler;
use App\Behavioral\Command\CalculatorDivideCommand as DivideCommand;
use App\Behavioral\Command\CalculatorMultiplyCommand as MultiplyCommand;
use App\Behavioral\Command\CalculatorSubtractCommand as SubtractCommand;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testCommand(): void
    {
        $calculator = new Calculator(4, 2);

        $addCommandHandler = new CommandHandler(new AddCommand($calculator));
        $subtractCommandHandler = new CommandHandler(new SubtractCommand($calculator));
        $multiplyCommandHandler = new CommandHandler(new MultiplyCommand($calculator));
        $divideCommandHandler = new CommandHandler(new DivideCommand($calculator));

        $this->assertEquals($addCommandHandler->handle(), 6);
        $this->assertEquals($subtractCommandHandler->handle(), 2);
        $this->assertEquals($multiplyCommandHandler->handle(), 8);
        $this->assertEquals($divideCommandHandler->handle(), 2);
    }
}
