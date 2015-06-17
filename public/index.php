<?php
require_once __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../app/app.php';
require __DIR__ . '/../app/router.php';
$app['debug'] = true;
$app->run();