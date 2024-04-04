<!-- add_content.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Link to your custom CSS or Bootstrap -->
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
    <!-- Header -->
    <?php include './ui/header.php'; ?>

    <?php include './logic/get_posts_by_user.php'; ?>
    
    <!-- Content Section -->
    <div class="container">
        <h2>Profile</h2>
        <?php 
            if (isset($posts[0]['profile_picture'])) {
                echo '<img src="' . $posts[0]['profile_picture'] . '" alt="' . $posts[0]['username'] . '"/>';
            }
        ?>
        <h3>
            <?php 
                if (isset($posts[0]['name'])) {
                    echo $posts[0]['name'];
                } else {
                    echo $_SESSION['username'];
                }
            ?>
        </h3>
        <p><?php echo $_SESSION['email'] ?></p>
        <h4>Bio:</h4>
        <p>
            <?php
            if (empty($posts[0]['bio'])) {
                echo 'This user has no bio.';
            } else {
                echo $posts[0]['bio'];
            }
            ?>
        </p>
        <h4>Posts:</h4>
        <ul>
            <?php
            if (empty($posts)) {
                echo '<li>This user has no posts.</li>';
            }
            foreach ($posts as $post) {
                echo
                '<li>' .
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
