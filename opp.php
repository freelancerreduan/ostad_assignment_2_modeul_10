



<?php

class Book {

    // Properties
    private $title;
    private $availableCopies;

    // Constructor
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Method to get the available copies of the book
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book (decreases available copies)
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            echo "Book borrowed: " . $this->title . "\n";
        } else {
            echo "No copies available for: " . $this->title . "\n";
        }
    }

    // Method to return a book (increases available copies)
    public function returnBook() {
        $this->availableCopies++;
        echo "Book returned: " . $this->title . "\n";
    }
}

class Member {

    // Properties
    private $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to get the name of the member
    public function getName() {
        return $this->name;
    }

    // Method to borrow a book
    public function borrowBook($book) {
        echo $this->name . " is borrowing " . $book->getTitle() . "\n";
        $book->borrowBook();
    }

    // Method to return a book
    public function returnBook($book) {
        echo $this->name . " is returning " . $book->getTitle() . "\n";
        $book->returnBook();
    }
}

// Usage

// Create 2 books with the following properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members with the following properties
$member1 = new Member("Reduan");
$member2 = new Member("Rafika Mim");

// Apply borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies with their names
echo "\nAvailable copies after borrowing:\n";
echo $book1->getTitle() . ": " . $book1->getAvailableCopies() . " copies available\n";
echo $book2->getTitle() . ": " . $book2->getAvailableCopies() . " copies available\n";

?>
