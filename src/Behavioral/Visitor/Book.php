<?php

namespace App\Behavioral\Visitor;

class Book implements Visitable
{
    public function __construct(
        private readonly array $chapters,
    ) {
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitBook($this);
    }

    public function chapters(): array
    {
        return $this->chapters;
    }
}
