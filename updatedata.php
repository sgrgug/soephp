<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    
        //database conenction
        $conn = mysqli_connect('localhost', 'root', '', 'software');

        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }

        // update data
        $sql = "UPDATE users SET firstname='milan' WHERE id=1";

        if(mysqli_query($conn, $sql)){
            echo "Record updated successfully";
        }else{
            echo "Error updating record: " . mysqli_error($conn);
        }

    
    ?>

</body>
</html>