<?php
namespace Posting\Entity;

class Post extends Base
{

    private $id;

    private $summary;

    private $content;

    private $releatedPosts;

    public function getId()
    {
        return $this->id;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
        return $this;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function getReleatedPosts()
    {
        return $this->releatedPosts;
    }

    public function setReleatedPosts($releatedPosts)
    {
        $this->releatedPosts = $releatedPosts;
        return $this;
    }
}