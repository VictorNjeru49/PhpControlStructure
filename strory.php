<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        
        Color:<input type="text" name="color" required> <br>
        PluralNoun:<input type="text"  name="PluralNoun" required><br>

        Celebrity:<input type="text"  name="Celebrity" required><br>

        <input type="submit" value="Submit">
    </form>

    <?php 
        $color =$_GET['color'];
        $PluralNoun = $_GET['PluralNoun'];
        $Celebrity = $_GET['Celebrity'];

        echo "Roses are $color"<br>
        echo "$PluralNoun are blue"<br>
        echo "$Celebrity is a legendary figure in the world of fashion and fashionable life."
   ?>
</body>
</html>