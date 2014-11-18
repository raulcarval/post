<?php

use Silex\Application;
use Silex\Provider\DoctrineServiceProvider;

$app = new Application();

$app->register(
    new DoctrineServiceProvider(),
    array (
        'db.options' => array (
        'driver' => 'pdo_mysql',
        'host' => '127.0.0.1',
        'dbname' => 'symfony_test',
        'user' => 'root',
        'password' => 'raul79',
        'charset' => 'utf8'
        )
    )
);
$app['debug'] = true;
return $app;
