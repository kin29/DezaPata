<?php

require __DIR__. '/vendor/autoload.php';

use DP\Iterator\BookShelf;
use DP\Iterator\Book;

$bookShelf = new BookShelf();
$bookShelf->appendBook(new Book('星の王子様'));
$bookShelf->appendBook(new Book('かいけつゾロリ'));
$bookShelf->appendBook(new Book('ミッケ！'));
$bookShelfIt = $bookShelf->getIterator_FILO();

while ($bookShelfIt->hasNext())
{
    echo $bookShelfIt->next()->getName() . "\n";
}
