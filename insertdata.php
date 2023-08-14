<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'software');

        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO users(firstname, lastname, email) VALUES('sagar', 'Doe', 'sagar@gmail.com')";
        // $sql1 = "INSERT INTO users(firstname, lastname, email) VALUES('gurung', 'Doe', 'gurung@gmail.com')";

        mysqli_query($conn, $sql);
        // mysqli_query($conn, $sql1);

        // if(mysqli_query($conn, $sql)){
        //     echo "New record created successfully";
        // }else{ 
        //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        // }

    ?>


</body>
</html>