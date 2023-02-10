<?php

namespace App\AbstractFactory\Chair;

class ModernChair extends Chair
{
    public function isAntique(): bool
    {
        return false;
    }

    public function numberOfSeats(): int
    {
        return 1;
    }
}
