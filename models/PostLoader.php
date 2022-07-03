<?php

declare(strict_types=1);

class PostLoader
{

    public function saveMyPost(Post $post)
    {
        $postData = array(
            "title"=>$post->getTitle(),
            "author"=>$post->getAuthor(),
            "content"=>$post->getContent()
        );
        var_dump($postData);
        $jsonPostData = json_encode($postData);
        var_dump($jsonPostData);
        file_put_contents('posts.json', $jsonPostData);
    }

    public function getPosts()
    {
    }
}