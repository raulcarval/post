<?php

use Posting\Controller\Post;

$app->get('/', 'Posting\Controller\Post::indexPost')->bind('homepage');