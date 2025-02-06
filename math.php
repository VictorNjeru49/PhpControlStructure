<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        firstname: <input type="text" step="0.1" name="num1"/><br>
        op:<input type="text" name="op"/><br>
        lastname: <input type="text" name="num2"/><br>
    </form>
     <?php
 $numbers = [1, 2, 3, 4, 5];
 $sum = 0;
 $num1 = $_POST["num1"];
 $num2 = $_POST["num2"];
 $op = $_POST["op"];
if($op == "+") {
    echo $num1 + $num2;
    Submi
    } elseif ($op == "-"){
    echo $num1 $num2;
    } elseif ($op == "/"){
    echo $num1 / $num2;
    } elseif ($op == "*") {
    echo $num1* $num2;
    } else {
    echo "Invalid Operator";
}

       
        foreach($numbers as $number) {
            $sum += $number;
        }
        echo "Sum of the numbers: ". $sum;
     ?>
</body>
</html>