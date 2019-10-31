<?php
    include "../DBMS/connect.php" ;
    $sql = "INSERT INTO Student (ID, Name, Age)
                VALUES (7, 'Madhav', 10)";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>
