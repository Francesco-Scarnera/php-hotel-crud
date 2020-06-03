<?php
// include DB
include __DIR__ . '/../database.php';
// utilis
include __DIR__ . '/../functions.php';
// get list rooms homepage
$rooms = getAll($conn, 'stanze');
