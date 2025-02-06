<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // create an instance of the Book class
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
    
    // method to display book information
    new book1 = new Book("To Kill a Mockingbird", "Harper Lee", 1960, 291)
}
    ?>
    
</body>
</html>