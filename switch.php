<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="grade">Enter your grade:</label>
        <input type="text" id="grade" name="grade" required>
        <input type="submit" value="Submit" name="submit">
        <input type="reset" value="Reset">
        <input type="hidden" name="submitted" value="true"> <!-- Added for form validation -->
    </form>
    <?php
    $grade = $_POST["grade"];
    switch($grade) {
    case "A":
    echo "You did amazing!";
    CC
    break;
    case "B":
    echo "You did pretty good";
    break;
    case "C":
    echo "You did poorly";
    break;
    case "D":
    echo "You did very bad";
    break;
    case "F":
    echo "YOU FAIL!";
    break;
    default:
        echo "invalid grade"
    }
    ?>
</body>
</html>