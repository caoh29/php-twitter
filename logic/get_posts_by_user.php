<?php
// Connect to db
include_once './db/db_connect.php';

$posts = array();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM posts JOIN users ON posts.user_id = users.id WHERE posts.user_id = '$user_id';";
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }
    }
} else {
    header('Location: index.php');
}

?>