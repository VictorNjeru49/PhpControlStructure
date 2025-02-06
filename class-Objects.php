<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Book{
        var $title
        var $author
        var $publicationYear
        var $pages

        // constructor function
        function __construct($title, $author, $publicationYear, $pages){
            $this->title = $title;
            $this->author = $author;
            $this->publicationYear = $publicationYear;
            $this->pages = $pages;
        }
    }
   
    $book1 = new Book()
    $book2 = new Book()

    $book1->title = "To Kill a Mockingbird";
    $book1->author = "Harper Lee";
    $book1->publicationYear = 1960;
    $book1->pages = 291;
    
    $book2->title = "1984";
    $book2->author = "George Orwell";
    $book2->publicationYear = 1949;
    $book2->pages = 328;

    echo "Title: ". $book1->title. "<br>";
    echo "Title: ". $book2->title. "<br>";

    ?>
</body>
</html>