<?php

namespace App\Tests\Behavioral;

use App\Behavioral\Observer\Order;
use App\Behavioral\Observer\OrderProcessor;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testObserver(): void
    {
        $orderProcessor = new OrderProcessor();
        $order = new Order();
        $order->attach($orderProcessor);
        $order->process();

        $this->expectOutputString("Order <{$order->id()}> was processed.");
    }
}
