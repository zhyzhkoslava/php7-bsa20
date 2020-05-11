<?php

declare(strict_types=1);

namespace App\Task2;
/**
 * Class BooksGenerator
 * @package App\Task2
 */
class BooksGenerator
{
    public array $libraryBooks = [];
    public int $minPagesNumber;
    public array $storeBooks = [];
    public int $maxPrice;

    /**
     * BooksGenerator constructor.
     * @param array $libraryBooks
     * @param int $minPagesNumber
     * @param array $storeBooks
     * @param int $maxPrice
     */
    public function __construct(

        int $minPagesNumber,
        array $libraryBooks,
        int $maxPrice,
        array $storeBooks
    )
    {
        $this->minPagesNumber = $minPagesNumber;
        $this->libraryBooks = $libraryBooks;
        $this->storeBooks = $storeBooks;
        $this->maxPrice = $maxPrice;
    }

    /** Filter and return data
     * @return \Generator
     */
    public function generate(): \Generator
    {
        foreach ($this->libraryBooks as $libraryBook) {
            if ($libraryBook->getPagesNumber() >= $this->minPagesNumber) {
                yield $libraryBook;
            }
        }

        foreach ($this->storeBooks as $storeBook) {
            if ($storeBook->getPrice() < $this->maxPrice) {
                yield $storeBook;
            }
        }
    }
}