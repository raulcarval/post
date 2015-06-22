<?php
namespace Posting\Controller;

use Silex\Application;
use Posting\Entity\Post;
use Symfony\Component\HttpFoundation\Response;
use Posting\Entity\PostRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

class PostController
{

    public function index()
    {
        return new Response('hello');
    }

    public function findAll(Application $app)
    {
        $posts = new PostRepository();
        
        return $app['twig']->render('hello.twig', array(
            'posts' => $posts->view()
        ));
    }

    public function insert()
    {
        $post = new PostRepository();
        return $post->adiciona();
    }
}