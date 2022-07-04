<?php

declare(strict_types=1);

class PostLoader
{

    public function saveMyPost(Post $post)
    {
        $currentPosts = file_get_contents('posts.json');
        $postsData = json_decode($currentPosts, true);
        $newPost = array(
            "title"=>$post->getTitle(),
            "date"=>$post->getDate(),
            "author"=>$post->getAuthor(),
            "content"=>$post->getContent()
        );
        $postsData[] = $newPost;
        $finalPosts = json_encode($postsData);
        file_put_contents('posts.json', $finalPosts);
    }

    public function getPosts()
    {
        // Get the content of the JSON file and decode it
        $reviews = json_decode(file_get_contents('posts.json'));
        return $reviews;
    }
}