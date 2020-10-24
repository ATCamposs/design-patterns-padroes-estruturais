<?php

require __DIR__ . '/../vendor/autoload.php';

use Src\Adapter\PHPBookAdapter;
use Src\Adapter\RenderBook;


$book = new PHPBookAdapter('Livro de PHP 7.0', 'André Campos');

$render = new RenderBook($book);
echo $render->renderTitleAndName();
