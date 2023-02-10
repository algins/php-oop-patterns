<?php

namespace App\AbstractFactory\Sofa;

class VictorianSofa extends Sofa
{
    public function isAntique(): bool
    {
        return true;
    }

    public function numberOfSeats(): int
    {
        return 2;
    }
}
