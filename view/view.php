<?php

declare(strict_types=1);

?>

<header>
    <h1>Welcome to my guestbook</h1>
</header>

<main>
    <h2>Write a review:</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <label for="title">Title:
                <input type="text" name="title" required="required" placeholder="Enter a title">
            </label>
        </div>

        <div>
            <label for="author">Author:
                <input type="text" name="author" required="required" placeholder="Enter your name">
            </label>
        </div>

        <div>
            <label for="content">Content:
                <textarea id="content" name="content" rows="5" cols="50" required="required" placeholder="Enter some content"></textarea>
            </label>
        </div>

        <button type="submit">Submit</button>

    </form>
</main>