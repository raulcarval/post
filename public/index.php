<?php 
ini_set('display_errors', 1);
require_once __DIR__.'/../vendor/autoload.php';

$app = require __DIR__.'/../src/app.php';
require __DIR__.'/../src/router.php';

$app->run();
