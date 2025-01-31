<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition</title>
</head>
<body>
    <form action="" method="post">
        <label for="">enter first number</label>
        <input type="number" id="num1" name="num1" required>
        <label for="">enter second number</label>
        <input type="number" id="num2" name="num2" required>
        <input type="submit" value="Add" name="submit">

    </form>

    <?php
        if(isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is $sum";
        }
   ?>
</body>
</html>