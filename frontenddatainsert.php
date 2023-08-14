<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php?>
    

    <form action="" method="get">

        <label for="firstname">firstname</label><br />
        <input type="text" name="firstname" id="firstname"><br />

        
        <label for="lastname">lastname</label><br />
        <input type="text" name="lastname" id="lastname" required><br />


        <label for="email">Email</label><br />
        <input type="email" name="email" id="email"><br />

        <input type="submit" name="submit" value="create">

    </form>

    <?php
    
        $conn = mysqli_connect('localhost', 'root', '', 'software');

        if(!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }

        if(isset($_GET['submit'])){
            $fname = $_GET['firstname'];
            $lname = $_GET['lastname'];
            $email = $_GET['email'];


            if($fname == "" || $lname == "" || $email == ""){
                echo "All fields are required";
            }else{
                
                $sql = "INSERT INTO users(firstname, lastname, email) VALUES('$fname', '$lname', '$email')";

                // mysqli_query($conn, $sql);

                if(mysqli_query($conn, $sql)){
                    echo "New record created successfully";
                }else{ 
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

                session_start();

                //redirect
                header("Location: home.php");

                $_SESSION['email'] = $email;

                // sagar@gmail.com

            }


            
        }

    ?>


</body>
</html>