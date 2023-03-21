<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Data Retrieval Lab 7 </title>
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

     $query = "SELECT * from Lab_07";
     $result = mysqli_query($conn, $query);

     if ($result) {
        echo "<table>";
        echo "<tr>";
        echo "<th> S_ID </th>";
        echo "<th> Name </th>";
        echo "<th> Email </th>";
        echo "<th> Major </th>";
        echo "</tr>";
        while ($result_row = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo "<td>$result_row[0] </td>";
            echo "<td>$result_row[1] </td>";
            echo "<td> $result_row[2] </td>";
            echo "<td>$result_row[3] </td>";
            echo "</tr>";
        }
        echo "</table>";
            } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>

</html>