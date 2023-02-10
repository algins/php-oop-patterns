<?php

namespace App\Prototype;

abstract class Shape
{
    public function clone(): Shape
    {
        return clone $this;
    }
}
