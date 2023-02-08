
    <?php
    echo " We will Add, Substract, divide, and multiply 6 and 3." . "<br>";
     $x = 6;
     $y = 3;
     function __construct( $x, $y ) {
    $this-> x = $x;
    $this->y = $y;
    }
     function add($x, $y) {
    return ($x + $y);
    }
     function subtract($x, $y) {
    return ($x - $y);
    }
     function multiply($x, $y) {
    return ($x * $y);
    }
     function divide($x, $y) {
    return  ($x / $y);
    }

    
    echo "Result of + is: " . add($x, $y) . "<br>"; 
    echo "Result of - is: " . subtract($x, $y) . "<br>";
    echo "Result of X is: " . multiply($x, $y) . "<br>"; 
    echo "Result of Dividing is: " . divide($x, $y) . "<br>"; 
    ?>