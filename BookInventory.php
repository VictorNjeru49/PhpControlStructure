<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Inventory</title>
</head>
<body>
    <h1>BOOk inventory</h1>
    <?php
    // Create an associative array to store book information
    $books = [
        'Book 1' => ['Author' => 'Author 1', 'Year' => 2000, 'Quantity' => 10],
        'Book 2' => ['Author' => 'Author 2', 'Year' => 2010, 'Quantity' => 5],
        'Book 3' => ['Author' => 'Author 3', 'Year' => 2015, 'Quantity' => 8],
    ];
    
    // Display book information in a table
    echo '<table border="1">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th>Quantity</th>
        </tr>';
    
    foreach ($books as $title => $info) {
        echo '<tr>';
        echo '<td>'. $title. '</td>';
        echo '<td>'. $info['Author']. '</td>';
        echo '<td>'. $info['Year']. '</td>';
        echo '<td>'. $info['Quantity']. '</td>';

        // display available status information
        if ($info['Quantity'] > 0) {
            echo '<td>Available</td>';
        } else {
            echo '<td>Out of stock</td>';
        }
        echo '</tr>';
    }
    
    echo '</table>';
   ?>
</body>
</html>