<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="number">Enter your number:</label>
        <input type="number" id="name" name="num1" required>
        <input type="number" id="name" name="num2" required>
        <input type="submit" value="Submit" name="submit">

        <?php 
        echo $_GET["num1"]+ $_GET["num2"]
        ?>
    </form>
</body>
</html>