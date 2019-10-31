<?php
    
    $dbhost = 'localhost' ;
    $username = 'root' ;
    $password = '' ;
    $db = 'TEST_DB' ;
    

    $conn = new mysqli($dbhost, $username, $password, $db);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected Succesfully" ;
?>
