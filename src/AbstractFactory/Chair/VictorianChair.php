<?php

namespace App\AbstractFactory\Chair;

class VictorianChair extends Chair
{
    public function isAntique(): bool
    {
        return true;
    }

    public function numberOfSeats(): int
    {
        return 1;
    }
}
