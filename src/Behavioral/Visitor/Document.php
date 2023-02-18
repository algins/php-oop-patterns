<?php

namespace App\Behavioral\Visitor;

class Document
{
    public function __construct(
        private readonly int $pageCount,
    ) {
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitDocument($this);
    }

    public function pageCount(): int
    {
        return $this->pageCount;
    }
}
