<?php

declare(strict_types=1);

namespace App\Task2;
/**
 * Class Book
 * @package App\Task2
 */
class Book
{
    protected string $title;
    protected int $price;
    protected int $pagesNumber;

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
        $this->setTitle($title);
        $this->setPrice($price);
        $this->setPagesNumber($pagesNumber);
    }

    /** Get title of the book
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /** Set Title value
     * @param $title
     */
    public function setTitle($title)
    {
        if ($title == '') {
            throw new \Exception('Invalid title value! Empty title!');
        } else {
            $this->title = trim($title);
        }
    }

    /** Get ptice of the book
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /** Set price value
     * @param $price
     */
    public function setPrice($price)
    {
        if ($price <= 0) {
            throw new \Exception('Invalid price value! Price must be greater than 0');
        } else {
            $this->price = $price;
        }
    }

    /** Get getPagesNumber of the book
     * @return int
     */
    public function getPagesNumber(): int
    {
        return $this->pagesNumber;
    }

    /** Set pagesNumber value
     * @param $pagesNumber
     */
    public function setPagesNumber($pagesNumber)
    {
        if ($pagesNumber <= 0) {
            throw new \Exception('Invalid pagesNumber value! pagesNumber must be greater than 0');
        } else {
            $this->pagesNumber = $pagesNumber;
        }

    }
}