<?php
include __DIR__ . '/../env.php';
//coonection
$conn = new mysqli($server_name, $username, $password, $db_name);
//check
if($conn && $conn->connect_error) {
    die('si è verificato un errore');
} 
