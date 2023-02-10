<?php

namespace App\AbstractFactory\Sofa;

class ModernSofa extends Sofa
{
    public function isAntique(): bool
    {
        return false;
    }

    public function numberOfSeats(): int
    {
        return 2;
    }
}
