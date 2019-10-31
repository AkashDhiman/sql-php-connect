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
    
    $sql = "INSERT INTO Student (ID, Name, Age)
    VALUES (9, 'Rahul', 16);";
    $sql .= "INSERT INTO Student (ID, Name, Age)
    VALUES (10, 'Bhanu', 17);";
    $sql .= "INSERT INTO Student (ID, Name, Age)
    VALUES (11, 'Gaurav', 19)";
    
    if ($conn->multi_query($sql) === TRUE) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>
