<?php
  session_start();

  require '../db/db_connect.php'; // Assuming you have a file named database.php for database connection

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $bio = $_POST['bio'];
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
    $profile_picture = substr($target_file, 1);
    $user_id = $_SESSION['user_id'];


    // Insert the user into the database
    $sql = "UPDATE users SET `name` = '$name', bio = '$bio',  profile_picture = '$profile_picture' WHERE users.id = '$user_id';";
    $result = $mysqli->query($sql);
    if ($result && move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
      // User updated successfully
      header("Location: ../profile.php");
    } else {
      echo "Error updating user: " . $mysqli->error;
    }
  }
?>