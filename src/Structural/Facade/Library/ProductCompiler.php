<?php

namespace App\Structural\Facade\Library\ProductCompiler;

use App\Structural\Facade\Library\Product;

function getProductFileLines(): array
{
    return [
        'fdbac758-c969-4eea-9050-d628a9f171ca Apple iPhone 14 Pro Max',
        '75685372-b998-4f73-acde-35f76a39af96 Samsung Galaxy S23 Ultra',
    ];
}

function getNameFromLine(string $line): string
{
    $lineParts = explode(' ', $line);
    unset($lineParts[0]);

    return implode(' ', $lineParts);
}

function getIdFromLine(string $line): string
{
    $lineParts = explode(' ', $line);

    return $lineParts[0];
}

function getProductObject(string $id, string $name): Product
{
    return new Product($id, $name);
}
