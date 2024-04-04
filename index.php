<!-- add_content.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
    <!-- Link to your custom CSS or Bootstrap -->
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
    <!-- Header -->
    <?php include './ui/header.php'; ?>

    <?php include './logic/get_posts.php'; ?>
    
    <!-- Content Section -->
    <div class="container">
        <h2>Posts</h2>
        <?php
            if(isset($_SESSION['user_id'])) {
                echo '<form action="./logic/add_post.php" method="POST">';
                echo '<textarea id="content" name="content"></textarea>';
                echo '<input type="submit" value="Add Post"/>';
                echo '</input>';
            }
        ?>
        <ul>
            <?php
            foreach ($posts as $post) {
                echo 
                '<li>' .
                    '<h5>' .
                        $post['username'] .
                    '</h5>' .
                    '<p>' .
                        $post['content'] .
                    '</p>' .
                    '<span>' .
                        $post['created_at'] .
                    '</span>' .
                '</li>';
            }
            ?>
        </ul>
    </div>

    <!-- Footer -->
    <?php include './ui/footer.php'; ?>
</body>
</html>
