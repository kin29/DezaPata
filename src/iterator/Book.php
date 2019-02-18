<?php

namespace DP\Iterator;

class Book
{
    private $bookName;

    public function __construct(string $bookName)
    {
        $this->bookName = $bookName;
    }

    public function getName(): string
    {
        return $this->bookName;
    }

}
