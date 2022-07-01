<?php

declare(strict_types=1);

class Post
{
    // POSTS MUST HAVE THE FOLLOWING ATTRIBUTES
    private string $title;
    private DateTime $date;
    private string $content;
    private string $author;


    public function __construct(string $title, string $content, string $author)
    {
        $this->title = $title;
        $this->date = new DateTime();
        $this->content = $content;
        $this->author = $author;
    }


    public function getTitle(): string
    {
        return $this->title;
    }


    public function getDate(): string
    {
        return $this->date;
    }


    public function getContent(): string
    {
        return $this->content;
    }


    public function getAuthor(): string
    {
        return $this->author;
    }

}