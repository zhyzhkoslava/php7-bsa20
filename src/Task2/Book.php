<?php

declare(strict_types=1);

namespace App\Task2;

class Book
{
    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getPagesNumber(): int
    {
        return $this->pagesNumber;
    }
}