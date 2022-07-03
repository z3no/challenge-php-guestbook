<?php

declare(strict_types=1);

class Post
{
    // POSTS MUST HAVE THE FOLLOWING ATTRIBUTES
    private string $title;
    private string $date;
    private string $content;
    private string $author;


    public function __construct(string $title, string $author, string $content)
    {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
        $this->date = Date('Y/m/d H-i-s');
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getDate()
    {
        return $this->date;
    }


}