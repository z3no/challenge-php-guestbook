<?php

declare(strict_types=1);

class Post
{
    // POSTS MUST HAVE THE FOLLOWING ATTRIBUTES
    private string $title;
    private string $date;
    private string $content;
    private string $author;

    /**
     * @param string $title
     * @param string $date
     * @param string $content
     * @param string $author
     */
    public function __construct(string $title, string $date, string $content, string $author)
    {
        $this->title = $title;
        $this->date = $date;
        $this->content = $content;
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

}