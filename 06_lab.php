<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 06</title>
</head>
<body>
<?php
       
       $connection = mysqli_connect('127.0.0.1', 'root', 'khalid', "06_lab"); 

        if(!$connection){
            echo "Error No ".mysqli_connect_errno();
            echo "<br>";
            echo "Error ".mysqli_connect_error();
            exit;
        }
            

        $query = "INSERT INTO `06_lab`( `F_name`, `L_name`, `S_id`, `Major`) VALUES ('Khalid','Binzouman','201911174', 'Software Engineer')";

        if(mysqli_query($connection, $query)){
            echo "New Student Added";
        } else {
           echo (mysqli_error($connection));
        }


    ?>
</body>
</html>