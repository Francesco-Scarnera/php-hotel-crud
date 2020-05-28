<?php
include __DIR__ . '/../database.php';
// get list rooms homepage
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $rooms = [];
    while($row = $result->fetch_assoc()) {
        // popolo array rooms con le singole stanze
        $rooms[] = $row;
    }
} elseif ($result) {
    echo 'No results';
} else {
    echo 'Query error';
}
// close DB connection
$conn->close();
