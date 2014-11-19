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
        'dbname' => 'db-name',
        'user' => 'user',
        'password' => 'pass',
        'charset' => 'utf8'
        )
    )
);
$app['debug'] = true;
return $app;
