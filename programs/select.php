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
    
    $sql = "SELECT ID, Name, Age FROM Student";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["ID"]. " - Name: " . $row["Name"]. " - Age: " . $row["Age"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();

?>
