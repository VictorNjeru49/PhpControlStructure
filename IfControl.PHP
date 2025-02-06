<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function getmax($num1 , $num2){
        if ($num1 > $num2){
            return $num1
        }elseif ($num2 > $num1){
            return $num2
        }else(
            echo "they are equal";
        )
    }
    function getmin($num1 , $num2, $num3){
        if ($num1>=$num2 && $num1 >= $num3){
            return $num1
        }elseif ($num2>=$num1 && $num2>=$num3){
            return $num2
        }else{
            return $num3
        }
    }
    ?>

</body>
</html>