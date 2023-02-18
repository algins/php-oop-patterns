<?php

namespace App\Behavioral\Visitor;

class PageCountVisitor implements Visitor
{
    private int $pageCount = 0;

    public function pageCount(): int
    {
        return $this->pageCount;
    }

    public function visitBook(Book $book): void
    {
        $this->pageCount = array_reduce($book->chapters(), fn($acc, $chapter) => $acc + $chapter->pageCount());
    }

    public function visitDocument(Document $document): void
    {
        $this->pageCount = $document->pageCount();
    }
}
