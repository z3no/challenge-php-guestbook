<?php

declare(strict_types=1);

?>

<header>
    <h1>Welcome to my guestbook</h1>
</header>

<section>
    <h2>Write a review:</h2>

    <form method="post" action="../index.php">
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" required="required" placeholder="Enter a title">
        </div>

        <div>
            <label for="author">Author:</label>
            <input type="text" name="author" required="required" placeholder="Enter your name">
        </div>

        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content" rows="10" cols="50" required="required" placeholder="Enter some content"></textarea>
        </div>

        <button type="submit">Submit</button>

    </form>
</section>