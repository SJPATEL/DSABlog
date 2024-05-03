<!-- Pro-13 : Write a PHP script that implements the concept of constructor and destructor -->

<?php
class Book
{
    public $title;
    public $author;
    // Constructor
    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
        echo "Creating: " . $this->title . " by " . $this->author . "<br>";
    }
    // Destructor
    public function __destruct()
    {
        echo "Destroying: " . $this->title . " by " . $this->author . "<br>";
    }
    public function getDetails()
    {
        return $this->title . " written by " . $this->author . ".<br>";
    }
}
// Creating an instance of Book
$book = new Book("Ansi C", "Balaguru Samy");
// Using the object
echo $book->getDetails();
// At the end of the script, the destructor is automatically called
?>