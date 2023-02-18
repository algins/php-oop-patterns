<?php

namespace App\Behavioral\Visitor;

class Chapter
{
    public function __construct(
        private readonly int $pageCount,
    ) {
    }

    public function pageCount(): int
    {
        return $this->pageCount;
    }
}
