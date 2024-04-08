<!-- add_content.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Link to your custom CSS or Bootstrap -->
    <link rel="stylesheet" href="./styles/globals.css">
    <link rel="stylesheet" href="./styles/profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include './ui/header.php'; ?>

    <?php include './logic/get_posts_by_user.php'; ?>
    
    <!-- Content Section -->
    <main id="main_profile">
        <h2>Profile</h2>
        <?php 
            if (isset($posts[0]['profile_picture'])) {
                echo '<div class="avatar_wrapper">';
                echo '<img src="' . $posts[0]['profile_picture'] . '" alt="' . $posts[0]['username'] . '"/>';
                echo '</div>';
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
    </main>

    <!-- Footer -->
    <?php include './ui/footer.php'; ?>
</body>
</html>
