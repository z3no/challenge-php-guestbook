<?php

declare(strict_types=1);

class PostLoader
{
    private array $posts = [];

    public function getPosts()
    {
        return $this->posts;
    }
}