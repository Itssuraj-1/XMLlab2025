<?php
// Load the XML file
$xml = simplexml_load_file("Bookstore.xml") or die("Error: Cannot load XML file");

// Loop through each <book> element
foreach ($xml->book as $book) {
    echo "Title: " . $book->title . "<br>";
    echo "Author: " . $book->author . "<br>";
    echo "Year: " . $book->year . "<br>";
    echo "Price: " . $book->price . "<br>";
    echo "Description: " . $book->description . "<br><br>";
    echo "<hr>";
}
?>
