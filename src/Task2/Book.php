<?php

declare(strict_types=1);

namespace App\Task2;
/**
 * Class Book
 * @package App\Task2
 */
class Book
{
    /**
     * Book constructor.
     * @param string $title
     * @param int $price
     * @param int $pagesNumber
     */
    public function __construct(
        string $title,
        int $price,
        int $pagesNumber
    )
    {
        $this->title = $title;
        $this->price = $price;
        $this->pagesNumber = $pagesNumber;
    }

    /** Get title of the book
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /** Get ptice of the book
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /** Get getPagesNumber of the book
     * @return int
     */
    public function getPagesNumber(): int
    {
        return $this->pagesNumber;
    }
}