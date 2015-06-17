<?php
namespace Posting\Controller;

use Symfony\Component\HttpFoundation\Response;
class Post
{

    public function indexPost()
    {
        return new Response('Hello World!');
    }
}