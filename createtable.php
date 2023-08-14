<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        // create database table
        $conn = mysqli_connect('localhost', 'root', '', 'software');

        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "CREATE TABLE users(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(100) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

        // mysqli_query($conn, $sql);

        if(mysqli_query($conn, $sql)){
            echo "Table created successfully";
        }else{
            echo "Error creating table: " . mysqli_error($conn);
        }


    ?>

</body>
</html>