<?php

declare(strict_types=1);

namespace App\Task2;
/**
 * Class BooksGenerator
 * @package App\Task2
 */
class BooksGenerator
{
    protected array $libraryBooks = [];
    protected int $minPagesNumber;
    protected array $storeBooks = [];
    protected int $maxPrice;

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
        $this->setMinPagesNumber($minPagesNumber);
        $this->libraryBooks = $libraryBooks;
        $this->storeBooks = $storeBooks;
        $this->setMaxPrice($maxPrice);
    }

    /**
     * @param $minPagesNumber
     * @throws \Exception
     */
    public function setMinPagesNumber($minPagesNumber)
    {
        if ($minPagesNumber <= 0) {
            throw new \Exception('Invalid minPagesNumber value! minPagesNumber must be greater than 0');
        } else {
            $this->pitStopTime = $minPagesNumber;
        }
    }

    /**
     * @param $maxPrice
     * @throws \Exception
     */
    public function setMaxPrice($maxPrice)
    {
        if ($maxPrice <= 0) {
            throw new \Exception('Invalid MaxPrice value! MaxPrice must be greater than 0');
        } else {
            $this->maxPrice = $maxPrice;
        }
    }

    /** Filter and generate data
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