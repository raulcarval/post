<?php
ini_set('display_errors', 1);

$app->match('/', 'Posting\Controller\Post::index')->bind('homepage');
$app->match('/find', 'Posting\Controller\PostController::findAll')->bind('find');
$app->get('/insert', 'Posting\Controller\PostController::insert')->bind('insert');