<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
 $number = 5; // Initialize the global variable.
    function sayHi($name){ // sayHI($name, $age)
        echo "Hello, $name";
    }
    sayHi("victor"); // Call the function to display the message.

    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }
    $sum = addNumbers(5, 7); // Call the function to add numbers and store the result in $sum.
    echo "The sum is: $sum"; // Display the result.

    function cube(){
        global $number; // Access the global variable outside the function.
        $number *= $number * $number;
        echo "The cube of $number is: $number";
    }
    
    cube(); // Call the function to calculate the cube.
    function cubes($num){
        return $num * $num * $num; // Return the cube of a number.
    }
    $cubeOfFive = cubes(5); // Call the function to calculate the cube of 5 and store the result in $cubeOfFive.
    echo "The cube of 5 is: $cubeOfFive"; // Display the result.
?>
</body>
</html>