<?php

require __DIR__ . '/../vendor/autoload.php';

use Src\Facade\EntityFacade;

$facade = new EntityFacade();
$result = $facade->resolve('André Campos');
//$result = EntityFacade::resolve('André Campos');

var_dump($result);
