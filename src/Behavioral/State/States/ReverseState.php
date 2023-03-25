<?php

namespace App\Behavioral\State\States;

use App\Behavioral\State\GearBox;

class ReverseState extends State
{
    public function switchToPreviousState(): void
    {
        $this->gearBox->lock();
        $this->gearBox->selectGear($this->gearBox::NO_GEAR);
        $this->gearBox->setState(new ParkState($this->gearBox));
    }

    public function switchToNextState(): void
    {
        $this->gearBox->selectGear($this->gearBox::NO_GEAR);
        $this->gearBox->setState(new NeutralState($this->gearBox));
    }
}
