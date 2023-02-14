<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3</title>
</head>
<body>

    <?php

        /* Indexed Array, The names of my classmates.*/

        $classmates = array("Abdullah", "Fahad", "Salah", "Abdulkareem", "Saud", "Ahmad"); 

        /*Associative Array, Some courses i have finished. */

        $course = array("CIS 321"=>"Operating Systems", "SWE 412"=>"Mobile Application Development", "SWE 301"=>"Software Requirements Engineering", "CIS 383"=>"Cyber Security and Cryptography");

        /*Multidimensional Array */

        $device = array (
        array("Laptop","Asus","MSI"),
        array("CPU","AMD","Intel"),
        array("GPU","AMD","Nvidia")
        );

    ?>
        <!-- Indexed Array, The name of my classmates -->
        <div>
<h1> Khalid Binzouman 201911174  </h1><br>
            <h1> The name of my classmates </h1><br>
            <?php    

                $length = count($classmates);

                for($i = 0; $i < $length; $i++) 
                {
                echo $classmates[$i];
                echo "<br>";
                }

            ?>
        </div>
        <hr>

    <!-- Associative Array, Some courses i have finished -->
        <div>
            <h1> Courses i have finished.</h1><br>
            <?php    

                foreach($course as $i => $i_value) {
                    echo "Course Code : " . $i . ", Course Name : " . $i_value;
                    echo "<br>";
                }
                
            ?>
        </div>
        <hr>

    <!-- Multidimensional Array  -->
        <div>
            <h1> Multidimensional array values </h1><br>
            <?php    

                echo '"I am looking for for '.$device[0][1].' '.$device[0][0].' with '.$device[1][1].' '.$device[1][0].' and '.$device[2][2].' '.$device[2][0].'".';
                
            ?>
        </div>
        <hr>

</body>
</html>