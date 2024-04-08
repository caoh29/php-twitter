<!-- add_content.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
    <!-- Link to your custom CSS or Bootstrap -->
    <link rel="stylesheet" href="./styles/globals.css">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include './ui/header.php'; ?>

    <?php include './logic/get_posts.php'; ?>
    
    <!-- Content Section -->
    <main id="main_index">
        <h1>Latest Trends</h1>
        <?php
            if(isset($_SESSION['user_id'])) {
                echo '<form action="./logic/add_post.php" method="POST">';
                echo '<div class="post_wrap">';
                echo '<textarea required id="content" name="content" placeholder="What are you thinking about?"></textarea>';
                echo '<input type="submit" value="Post"/>';
                echo '</div>';
                echo '</form>';
            }
        ?>
        <ul>
            <?php
            foreach ($posts as $post) {
                echo
                '<li>' .
                    '<div class="post_wrap">' .
                        '<div class="post_avatar">' .
                            '<img src="' . $post['profile_picture'] . '" alt="avatar">' .
                        '</div>' .
                        '<div class="post_text">' .
                            '<h3>' .
                                $post['username'] .
                            '</h3>' .
                            '<p>' .
                                $post['content'] .
                            '</p>' .
                            '<span>' .
                                $post['created_at'] .
                            '</span>' .
                        '</div>' .
                    '</div>' .
                '</li>';
            }
            ?>
        </ul>
    </main>

    <!-- Footer -->
    <?php include './ui/footer.php'; ?>
</body>
</html>
