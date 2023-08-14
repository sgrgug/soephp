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

        // select data
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                // echo "id: " . $row['id'] . " - Name: " . $row['firstname'] . " " . $row['lastname'] . " - Email: " . $row['email'] . "<br>";
                $fname = $row['firstname'];
                $lname = $row['order'];
                $email = $row['email'];

                // echo $row['firstname'];

                echo "<br />$fname";
                echo "<br />$lname";
                echo "<br />";

            }
        }else{
            echo "0 results";
        }

        // echo $fname;

        //close database
        mysqli_close($conn);
        

    ?>


</body>
</html>