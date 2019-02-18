<?php

namespace DP\Iterator;

/**
 * 何か(=本)の集合体[Aggregate]
 *
 * Class BookShelf
 * @package DP\Iterator
 */
class BookShelf
{
    private $books = [];

    public function __construct()
    {
        $this->books = [];
    }

    public function getBookAt(int $index): Book
    {
        return $this->books[$index];
    }

    public function appendBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function getLength(): int
    {
        return count($this->books);
    }

    public function getIterator(): BookShelfIterator
    {
        return new BookShelfIterator($this);
    }
}
