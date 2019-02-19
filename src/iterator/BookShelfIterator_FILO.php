<?php

namespace DP\Iterator;

/**
 * 何か(=本)の集合体を数える人[Iterator]
 * 数え方：LIFO
 *
 * Class BookShelfIterator
 * @package DP\Iterator
 */
class BookShelfIterator_FILO
{
    private $bookShelf;
    private $index;

    public function __construct(BookShelf $bookShelf)
    {
        $this->bookShelf = $bookShelf;
        $this->index = $this->bookShelf->getLength() - 1;
    }

    public function hasNext(): bool
    {
        return $this->index >= 0;
    }

    public function next(): Book
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index--;
        return $book;
    }
}
