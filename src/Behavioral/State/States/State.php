<?php

namespace App\Behavioral\State\States;

use App\Behavioral\State\GearBox;

abstract class State
{
    public function __construct(
        protected GearBox $gearBox,
    ) {
    }

    abstract public function switchToPreviousState(): void;
    abstract public function switchToNextState(): void;
}
