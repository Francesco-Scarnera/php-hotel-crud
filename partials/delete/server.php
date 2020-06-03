<?php 
// Connect db
include_once __DIR__ . '/../database.php';
//utils
include __DIR__ . '/../functions.php';
// GET room ID
if (empty($_POST['id'])) {
    die('ID non corretto');
}
$id_room = $_POST['id'];
$url = "$base_path?del=room";
// Query
removeById($conn, 'stanze', $id_room, $url);