<?php

use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;

$app->get('/', 'getHomepage');

function getHomePage()
{
        return 'Homepage';
}
