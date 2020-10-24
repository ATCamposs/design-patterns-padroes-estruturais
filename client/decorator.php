<?php

require __DIR__ . '/../vendor/autoload.php';

use Src\Decorator\User;
use Src\Decorator\OrmDecorator;
use Src\Decorator\MigrationDecorator;

$user = new User();
$user->setName('André Campos');

$orm = new OrmDecorator();
$orm->setEntity($user);
$result = $orm->operation();
var_dump($result);

$migration = new MigrationDecorator();
$migration->setEntity($user);
$result = $migration->operation();
var_dump($result);
