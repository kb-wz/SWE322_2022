<html>
<head>
  <title>Calculator Assignment</title>
</head>
<body>
  <h1>Calculator Assignment</h1>
  <form action="calculator.php" method="post">
    <p>Enter two numbers and an operation symbol:</p>
    <input type="text" name="num1" placeholder="First number">
    <input type="text" name="op" placeholder="+ - * /">
    <input type="text" name="num2" placeholder="Second number">
    <input type="submit" value="Calculate">
  </form>
</body>
</html>

<?php
// get the user input from the form
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];

// check if the input is valid
if (is_numeric($num1) && is_numeric($num2) && in_array($op, ["+", "-", "*", "/"])) {
  // perform the calculation based on the operation
  switch ($op) {
    case "+":
      $result = $num1 + $num2;
      break;
    case "-":
      $result = $num1 - $num2;
      break;
    case "*":
      $result = $num1 * $num2;
      break;
    case "/":
      // check if the divisor is zero
      if ($num2 == 0) {
        $result = "Cannot divide by zero";
      } else {
        $result = $num1 / $num2;
      }
      break;
  }
  // display the result
  echo "<p>The result of $num1 $op $num2 is $result</p>";
} else {
  // display an error message
  echo "<p>Invalid input. Please enter two numbers and an operation symbol.</p>";
}
?>