<?php 
// Connect db
include_once __DIR__ . '/../database.php';
// GET room ID
if (empty($_POST['id'])) {
    die('ID non corretto');
}
$id_room = $_POST['id'];
// Query
$sql = "DELETE FROM `stanze` WHERE `id`= $id_room";
$result = $conn->query($sql);

var_dump($conn->affected_rows);

if ($result && $conn->affected_rows > 0) {
    header("Location: $base_path?del=1");
} elseif ($result) {
    echo 'Nessuna stanza trovata';
} else {
    echo 'Si è verificato un arrore';
}