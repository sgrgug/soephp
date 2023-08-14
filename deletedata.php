<?php

// database connection
    $conn = mysqli_connect('localhost', 'root', '', 'software');

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "DELETE FROM users WHERE id=1";

    mysqli_query($conn, $sql);

?>