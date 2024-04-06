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
</head>
<body>
    <!-- Header -->
    <?php include './ui/header.php'; ?>

    <?php include './logic/get_posts.php'; ?>
    
    <!-- Content Section -->
    <main id="main_index">
        <h1>Posts</h1>
        <?php
            if(isset($_SESSION['user_id'])) {
                echo '<form action="./logic/add_post.php" method="POST">';
                echo '<div class="post_wrap">';
                echo '<textarea id="content" name="content"></textarea>';
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
                '</li>';
            }
            ?>
        </ul>
    </main>

    <!-- Footer -->
    <?php include './ui/footer.php'; ?>
</body>
</html>
