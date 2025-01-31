<!DOCTYPE html>
<html>
<head>
    <title>Grade Classification</title>
</head>
<body>

<form method="post">
    <label for="grade">Enter Grade:</label>
    <input type="number" name="grade" id="grade" required> <br><br>
    
    <input type="submit" name="submit" value="Submit">
</form>

<?php

if (isset($_POST['submit'])) {
    $grade = $_POST['grade'];
    
    if ($grade >= 1 && $grade <= 3) {
        echo 'Lower Primary';
    } elseif ($grade >= 4 && $grade <= 6) {
        echo 'Upper Primary';
    } elseif ($grade >= 7 && $grade <= 9) {
        echo 'Junior Secondary';
    } elseif ($grade >= 10 && $grade <= 12) {
        echo 'Senior Secondary';
    } elseif ($grade >= 13 && $grade <= 15) {
        echo 'Higher Education';
    } else {
        echo 'Enter a valid Grade';
    }
}
?>

</body>
</html>
