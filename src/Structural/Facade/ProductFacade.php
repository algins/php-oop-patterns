<?php

namespace App\Structural\Facade;

use App\Structural\Facade\Library\Product;

use function App\Structural\Facade\Library\ProductCompiler\getProductFileLines;
use function App\Structural\Facade\Library\ProductCompiler\getIdFromLine;
use function App\Structural\Facade\Library\ProductCompiler\getNameFromLine;
use function App\Structural\Facade\Library\ProductCompiler\getProductObject;

class ProductFacade
{
    private array $products;

    public function __construct()
    {
        $this->compile();
    }

    private function compile(): void
    {
        $lines = getProductFileLines();

        $this->products = array_map(fn($line) => getProductObject(
            getIdFromLine($line),
            getNameFromLine($line),
        ), $lines);
    }

    public function products(): array
    {
        return $this->products;
    }

    public function product(string $id): ?Product
    {
        $filteredProducts = array_values(
            array_filter($this->products, fn($product) => $product->id() === $id)
        );

        return $filteredProducts[0] ?? null;
    }
}
