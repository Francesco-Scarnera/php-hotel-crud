<?php
// Connect to DB
include __DIR__ . '/../database.php';
// get room ID
$id_room = $_GET['id'];
// Query selected room
$sql = "SELECT * FROM `stanze` WHERE `id` = $id_room";
$result = $conn->query($sql);

if($conn && $result->num_rows > 0) {
    $room = $result->fetch_assoc();
} elseif($result) {
    echo 'No results';
} else {
    echo 'Query error';
}
// Close connection
$conn ->close();