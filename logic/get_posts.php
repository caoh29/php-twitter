<?php
// Connect to db
include_once './db/db_connect.php';

$posts = array();
$sql = "SELECT content, posts.created_at, username FROM posts JOIN users ON posts.user_id = users.id";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
}

?>