<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Loop to print the numbers 1 to 5 with a YouTube link for each number
 for($i =1; $i<=5; $i++) {
    echo "$i youtube"<br>
 }
 $luckyNumber = array(4,8,14,16,23,42);

 for ($j=0; $j<=count($luckyNumber); $j++) {
    echo "The lucky number is $luckyNumber[$j]". "<br>";
 }


 // comments 
 // This is a simple loop to print numbers from 1 to 10
 for ($k = 1; $k <= 10; $k++) {
    echo $k. "<br>";
 }

 // This is a simple loop to print numbers from 10 to 1
 for ($l = 10; $l >= 1; $l--) {
    echo $l. "<br>";
 }

 // This is a simple loop to print numbers from 1 to 10 in reverse order
 for ($m = 10; $m >= 1; $m--) {
    echo $m. "<br>";
 }

 // This is a simple loop to print numbers from 1 to 10 in reverse order, but only for odd numbers
 for ($n = 10; $n >= 1; $n--) {
    if ($n % 2!= 0) {
        echo $n. "<br>";
    }
 }

 // This is a simple loop to print numbers from 1 to 10 in reverse order, but only for odd numbers, using a while loop
 $o = 10;
 while ($o >= 1) {
    if ($o % 2!= 0) {
        echo $o. "<br>";
    }
    $o--;
 }
 // This is a simple loop to print numbers from 1 to 10 in reverse order, but only for odd numbers, using a do-while loop
 $p = 10;
 do {
    if ($p % 2!= 0) {
        echo $p. "<br>";
    }
    $p--;
 } while ($p >= 1);
    ?>
</body>
</html>