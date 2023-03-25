<?php

namespace App\Behavioral\State;

use App\Behavioral\State\States\ParkState;
use App\Behavioral\State\States\State;

class GearBox
{
    public const REVERSE_GEAR = -1;
    public const NO_GEAR = 0;
    public const FORWARD_GEAR = 1;

    private State $state;
    private bool $isLocked = true;
    private int $selectedGear = self::NO_GEAR;

    public function __construct()
    {
        $this->state = new ParkState($this);
    }

    public function getState(): State
    {
        return $this->state;
    }

    public function getIsLocked(): bool
    {
        return $this->isLocked;
    }

    public function getSelectedGear(): int
    {
        return $this->selectedGear;
    }

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function lock(): void
    {
        $this->isLocked = true;
    }

    public function unlock(): void
    {
        $this->isLocked = false;
    }

    public function selectGear(int $gear): void
    {
        $this->selectedGear = $gear;
    }

    public function switchToPreviousState(): void
    {
        $this->state->switchToPreviousState();
    }

    public function switchToNextState(): void
    {
        $this->state->switchToNextState();
    }
}
