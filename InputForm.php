<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="inputForm.php" method="get"> 
    <!-- GET request -->

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required><br><br>
    <input type="submit" id="submit" name="submit" value="Okay">
</form>

<?php 
<br>
echo $_GET["name"]
echo $_GET["email"]

?>
</body>
</html>