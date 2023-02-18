<?php

namespace App\Tests\Visitor;

use App\Behavioral\Visitor\Book;
use App\Behavioral\Visitor\Chapter;
use App\Behavioral\Visitor\Document;
use App\Behavioral\Visitor\PageCountVisitor;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    public function testVisitor(): void
    {
        $visitor = new PageCountVisitor();
        $document = new Document(55);
        $document->accept($visitor);

        $this->assertEquals($visitor->pageCount(), 55);

        $visitor = new PageCountVisitor();
        $book = new Book([new Chapter(10), new Chapter(15), new Chapter(8)]);
        $book->accept($visitor);

        $this->assertEquals($visitor->pageCount(), 33);
    }
}
