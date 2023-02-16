<?php

namespace App\Behavioral\Observer;

class OrderProcessor implements Observer
{
    public function update(Observable $observable): void
    {
        echo "Order <{$observable->id()}> was processed.";
    }
}
