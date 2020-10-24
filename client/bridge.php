<?php

require __DIR__ . '/../vendor/autoload.php';

use Src\Bridge\BookAuthorTitle;
use Src\Bridge\BookTitleAuthor;
use Src\Bridge\LowerImplementor;
use Src\Bridge\UpperImplementor;

$example1 = new BookAuthorTitle('André Campos', 'Livro PHP 7.0', LowerImplementor::class);
var_dump($example1->get());

$example1 = new BookAuthorTitle('André Campos', 'Livro PHP 7.0', UpperImplementor::class);
var_dump($example1->get());

$example1 = new BookTitleAuthor('André Campos', 'Livro PHP 7.0', LowerImplementor::class);
var_dump($example1->get());

$example1 = new BookTitleAuthor('André Campos', 'Livro PHP 7.0', UpperImplementor::class);
var_dump($example1->get());
