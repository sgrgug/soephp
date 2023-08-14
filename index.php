<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        // database connection
        $conn = new mysqli('localhost', 'root', '');

        // create database
        $sql = "CREATE DATABASE software";

        mysqli_query($conn, $sql);

        if(mysqli_query($conn, $sql)){
            echo "Database created successfully";
        }else{
            echo "Error creating database: " . mysqli_error($conn);
        }





    ?>
</body>
</html>