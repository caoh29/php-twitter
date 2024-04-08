<!-- add_content.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Link to your custom CSS or Bootstrap -->
    <link rel="stylesheet" href="./styles/globals.css">
    <link rel="stylesheet" href="./styles/update_delete_profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <?php include './ui/header.php'; ?>
    
    <!-- Content Section -->
    <main id="main_update">
        <h2>Profile Settings</h2>
        <form id="update_form" action="./logic/update_profile.php" method="POST" enctype="multipart/form-data">
            <div class="username_wrapper">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            
            <div class="bio_wrapper">
                <label for="bio">Bio:</label>
                <textarea id="bio" name="bio" required></textarea>
            </div>
            
            <div class="avatar_wrapper">
                <label for="avatar">Choose a profile picture:</label>
                <input type="file" id="avatar" name="avatar" accept="image/*" required>
            </div>
            
            <div class="submit_wrapper">
                <input type="submit" value="Update">
            </div>
        </form>
        <form id="delete_form" action="./logic/delete_profile.php" method="POST" enctype="multipart/form-data">
            <input type='submit' value="Delete Account">
        </form>
    </main>

    <!-- Footer -->
    <?php include './ui/footer.php'; ?>
</body>
</html>
