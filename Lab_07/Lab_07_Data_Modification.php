<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Data Modification Lab 7 </title>
</head>

<body>
    <?php
    $host_ip = "127.0.0.1";
    $username = "root"; 
    $password = "12345";
    $database = "Lab_07";

    $conn = mysqli_connect($host_ip, $username, $password, $database);

     if (!$conn) {
        echo "Debugging errno: " . mysqli_connect_errno();
        echo "<br>";
        echo "Debugging error: " . mysqli_connect_error();
        exit;
     }

      $query = "UPDATE Lab_07 set name='Khalid Alwaleed' WHERE name='Khalid Binzouman'";
       
       $result = mysqli_query($conn, $query);
    if (mysqli_query($conn, $query)) {
        echo "Update has been successful";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
</body>

</html>