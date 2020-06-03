<?php 


/**
* GET ALL RECORDS FROM A DB TABLE 
**/
function getAll($conn, $table) {
    $sql = "SELECT * FROM `$table`";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $records = [];
        while($row = $result->fetch_assoc()) {
        // popolo array rooms con le singole stanze
            $records[] = $row;
        }
    } elseif ($result) {
        $records = [];
    } else {
        $records = false;
    }
    // close DB connection
    $conn->close();

    return $records;
}

/**
 * GET SINGLE RECORD BY ID
 **/
function getById($conn, $table, $id) {
    $sql = "SELECT * FROM `$table` WHERE `id` = $id";
    $result = $conn->query($sql);

    if($conn && $result->num_rows > 0) {
        $record = $result->fetch_assoc();
    } elseif($result) {
        $record = [];
    } else {
        $record = false;
    }
    // Close connection
    $conn ->close();

    return $record;
}

/**
 * DELETE A RECORD BY ID
 **/
function removeById($conn, $table, $id, $url) {
    $sql = "DELETE FROM `$table` WHERE `id`= $id";
    $result = $conn->query($sql);

    var_dump($conn->affected_rows);

    if ($result && $conn->affected_rows > 0) {
        header("Location: $url");
    } elseif ($result) {
        die('Nessuna stanza trovata');
    } else {
        die('Si è verificato un arrore');   
    }
    $conn->close();
}