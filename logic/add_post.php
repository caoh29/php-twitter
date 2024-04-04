<?php
  session_start();

  require '../db/db_connect.php'; // Assuming you have a file named database.php for database connection

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST['content'];
    $user_id = $_SESSION['user_id'];


    // Insert the user into the database
    $sql = "INSERT INTO `posts` (`user_id`, `content`, `created_at`) VALUES ('$user_id', '$content', NOW());";
    $result = $mysqli->query($sql);
    if ($result) {
      // User updated successfully
      header("Location: ../index.php");
    } else {
      echo "Error creating post: " . $mysqli->error;
    }
  }
?>