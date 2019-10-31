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
    
    $sql = "UPDATE Student SET Age=20 WHERE ID=1";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
?>
