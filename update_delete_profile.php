<!-- add_content.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Link to your custom CSS or Bootstrap -->
    <link rel="stylesheet" href="./styles/update_delete_profile.css">
</head>
<body>
    <!-- Header -->
    <?php include './ui/header.php'; ?>
    
    <!-- Content Section -->
    <div class="container">
        <h2>Profile Settings</h2>
        <form action="./logic/update_profile.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio"></textarea>
            
            <label for="avatar">Choose a profile picture:</label>
            <input type="file" id="avatar" name="avatar" accept="image/*" required>
            
            <button type="submit">Submit</button>
        </form>
        <form action="./logic/delete_profile.php" method="POST" enctype="multipart/form-data">
            <button type='submit'>Delete Account</button>
        </form>
    </div>

    <!-- Footer -->
    <?php include './ui/footer.php'; ?>
</body>
</html>
