<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use App\Task2\Book;
use App\Task2\BooksGenerator;

$libraryBooks = [];
$storeBooks = [];

$libraryBooks[] = new Book("libraryBook1", 10, 10);
$libraryBooks[] = new Book("libraryBook2", 15, 15);
$libraryBooks[] = new Book("libraryBook3", 20, 20);
$libraryBooks[] = new Book("libraryBook4", 25, 25);
$libraryBooks[] = new Book("libraryBook5", 30, 30);

$storeBooks[] = new Book("storeBook1", 10, 10);
$storeBooks[] = new Book("storeBook2", 15, 15);
$storeBooks[] = new Book("storeBook3", 20, 20);
$storeBooks[] = new Book("storeBook4", 25, 25);
$storeBooks[] = new Book("storeBook5", 30, 30);


$booksGenerator = new BooksGenerator(10, $libraryBooks, 10, $storeBooks);

