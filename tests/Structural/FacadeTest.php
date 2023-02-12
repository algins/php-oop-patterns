<?php

namespace App\Tests\Structural;

use App\Structural\Facade\ProductFacade;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testFacade(): void
    {
        $productId = '75685372-b998-4f73-acde-35f76a39af96';
        $productName = 'Samsung Galaxy S23 Ultra';

        $productFacade = new ProductFacade();

        $this->assertCount(2, $productFacade->products());
        $this->assertEquals($productFacade->product($productId)->name(), $productName);
    }
}
