<?php

namespace App\AbstractFactory\Chair;

abstract class Chair
{
    abstract public function isAntique(): bool;
    abstract public function numberOfSeats(): int;
}
