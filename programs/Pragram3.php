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
    
    $option= $_REQUEST["option"];
    
    $sql = "";

    switch ($option) {
    case 1:
        $sql = "SELECT ID, Name, Age FROM Student";
        break;
    
    case 2:
        $sql = "SELECT ID, Name, Age FROM Student";
        break;
    
    case 3:
        $sql = "SELECT ID, Name, Age FROM Student";
        break;
        
    case 4:
        $sql = "SELECT ID, Name, Age FROM Student";
        break;
    
    case 5:
        $sql = "SELECT ID, Name, Age FROM Student";
        break;

    case 6: 
        $sql = "SELECT ID, Name, Age FROM Student";
        break;
    }

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["ID"]. " - Name: " . $row["Name"]. " - Age: " . $row["Age"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
