<?php
namespace Posting\Entity;

use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;

class PostRepository
{

    public function view()
    {
        $db = new \PDO('mysql:host=localhost;dbname=posting', 'root', '',
            array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        
        $sql = "SELECT * FROM posts LIMIT 10";
        $stmt = $db->prepare($sql);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Post::class);
        $stmt->execute();
        $result = $stmt->fetchAll();
        
        return $result;
    }

    public function adiciona()
    {
        $db = new \PDO('mysql:host=localhost;dbname=posting', 'root', '');
        
        $post = new Post();
        $post = $post->setTitle('Elisa');
        
        $sql = "INSERT INTO posts (title) VALUES (:title)";
        $stmt = $db->prepare($sql);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, Post::class);
        
        $stmt->execute(array(
            ':title' => $post->getTitle()
        ));
    }
}