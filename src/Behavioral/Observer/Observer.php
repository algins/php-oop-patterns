<?php

namespace App\Behavioral\Observer;

interface Observer
{
    public function update(Observable $observable): void;
}
