<?php

namespace App\Behavioral\State\States;

use Exception;

class DriveState extends State
{
    public function switchToPreviousState(): void
    {
        $this->gearBox->selectGear($this->gearBox::NO_GEAR);
        $this->gearBox->setState(new NeutralState($this->gearBox));
    }

    public function switchToNextState(): void
    {
        throw new Exception('This is the last state!');
    }
}
