<?php

declare(strict_types=1);

require 'view/header.php';
require 'view/view.php';
require 'view/footer.php';
require 'models/Post.php';
require 'models/PostLoader.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // We create a new POSTLOADER
    $postLoader = new PostLoader();

    // We add a new post object with our parameter values
    $post = new Post($_POST['title'], $_POST['author'], $_POST['content']);

    // We save our post with help of the saveMyPost function
    $postLoader->saveMyPost($post);

    $reviews = $postLoader->getPosts();
} else {
    $postLoader = new PostLoader();
    $reviews = $postLoader->getPosts();
}


//var_dump($post->getTitle(), $post->getAuthor(), $post->getContent());

?>

<section>
    <h2>Reviews</h2>
    <div>
        <?php if (count($reviews) <= 20): ?>
            <?php for ($i=0; $i < count($reviews); $i++): ?>
                <h4><?= $reviews[$i]->{'title'}; ?></h4>
                <h6><?= $reviews[$i]->{'date'}; ?></h6>
                <h4><?= $reviews[$i]->{'author'}; ?></h4>
                <h5><?= $reviews[$i]->{'content'}; ?></h5>
                <br>
            <?php endfor; ?>
        <?php endif; ?>
    </div>
</section>