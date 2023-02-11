<?php

namespace App\Creational\AbstractFactory\Sofa;

abstract class Sofa
{
    abstract public function isAntique(): bool;
    abstract public function numberOfSeats(): int;
}
