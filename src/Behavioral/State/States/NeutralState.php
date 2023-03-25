<?php

namespace App\Behavioral\State\States;

class NeutralState extends State
{
    public function switchToPreviousState(): void
    {
        $this->gearBox->selectGear($this->gearBox::REVERSE_GEAR);
        $this->gearBox->setState(new ReverseState($this->gearBox));
    }

    public function switchToNextState(): void
    {
        $this->gearBox->selectGear($this->gearBox::FORWARD_GEAR);
        $this->gearBox->setState(new DriveState($this->gearBox));
    }
}
