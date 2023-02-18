<?php

namespace App\Behavioral\Visitor;

interface Visitor
{
    public function visitBook(Book $book): void;
    public function visitDocument(Document $document): void;
}
