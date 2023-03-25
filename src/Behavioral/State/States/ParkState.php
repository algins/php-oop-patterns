<?php

namespace App\Behavioral\State\States;

use Exception;

class ParkState extends State
{
    public function switchToPreviousState(): void
    {
        throw new Exception('This is the very first state!');
    }

    public function switchToNextState(): void
    {
        $this->gearBox->unlock();
        $this->gearBox->selectGear($this->gearBox::REVERSE_GEAR);
        $this->gearBox->setState(new ReverseState($this->gearBox));
    }
}
