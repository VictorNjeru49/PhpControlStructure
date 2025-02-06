<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="checkbox.phph" method="post">
    Apple: <input type="checkbox" name= fruit[] value="apple" />
    Orange: <input type="checkbox" name= fruit[] value="orange" />
    Pears: <input type="checkbox" name= fruit[] value="pears" />
    <input type="submit" value="submit" name="submit"/>

    <?php
    // Check if the form has been submitted
    $fruits =$_POST['fruits'];
    echo $fruits

    $grade = array("jim"=>"A+", "pam"=>"B+");
    echo "Jim's grade: ". $grade["jim"];
    ?>

</form>
</body>
</html>