<?php 
include_once __DIR__ . '/../../env.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $base_path; ?>dist/css/app.css">
</head>
<body>


<header class="main-header">
    <nav class="navbar navbar-dark navbar-expand bg-primary">
        <a class="navbar-brand" href="<?php echo $base_path; ?>">Boolean hotel</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path; ?>">
                    All rooms
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path; ?>create.php">
                    New room
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $base_path; ?>bookings.php">
                    Bookings
                </a>
            </li>
        </ul>
    </nav>
</header>

<div id="app" class="pb-2">
