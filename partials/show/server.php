<?php
// Connect to DB
include __DIR__ . '/../database.php';
// utils
include __DIR__ . '/../functions.php';
// get room ID
$id_room = $_GET['id'];
// Query selected room
$room = getById($conn, 'stanze', $id_room);