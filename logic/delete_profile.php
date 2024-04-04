<?php
  session_start();

  require '../db/db_connect.php'; // Assuming you have a file named database.php for database connection

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];


    // Insert the user into the database
    $sql = "DELETE FROM users WHERE users.id = '$user_id';";
    $result = $mysqli->query($sql);
    if ($result) {
      // User updated successfully
      header("Location: ../signout.php");
    } else {
      echo "Error deleting user: " . $mysqli->error;
    }
  }
?>