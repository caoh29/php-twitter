<?php
require './db/db_connect.php'; // Assuming you have a file named database.php for database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user into the database
    $stmt = $mysqli->prepare("INSERT INTO users (username, email, password, created_at) VALUES (?, ?, ?, NOW())");
    $stmt->bind_param("sss", $username, $email, $hashed_password);
    if ($stmt->execute()) {
        // Registration successful, redirect to login page
        header("Location: signin.php");
        exit;
    } else {
        // Error occurred, handle appropriately
        echo "Error: " . $mysqli->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title> 
    <!-- Link to your custom CSS or Bootstrap -->
    <link rel="stylesheet" href="./styles/signup.css">
</head>
<body>
    <h2>Register</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        
        <input type="submit" value="Register">
        <p>Already have an account? <a href="signin.php">Sign in now</a>.</p>
    </form>
</body>
</html>