<?php
//INclude DB
include __DIR__ . '/../database.php';
//Utils
include __DIR__ . '/../functions.php';

// Query prenotazioni
$bookings = getAll($conn, 'prenotazioni');