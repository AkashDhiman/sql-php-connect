<?php
    $dbhost = "localhost";
    $username = "root";
    $password = "";
    $dbname = "TEST_DB";
    
    // Create connection
    $conn = new mysqli($dbhost, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // sql to delete a record
    $sql = "DELETE FROM Student WHERE ID=6";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();
?>
