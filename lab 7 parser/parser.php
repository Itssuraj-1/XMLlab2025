<?php
// Load the XML file
$xml = simplexml_load_file("Bookstore.xml") or die("Error: Cannot load XML file");

//Loop through each <book> element
foreach ($xml->book as $book) {
    echo "title: " . $book->title . "<br>";
    echo "author: " . $book->author . "<br>";
    echo "year: " . $book->year . "<br>";
    echo "price: " . $book->price . "<br>";
    echo "". $book->description . "<br>";
    echo "<br>";
    echo "
    ". $book->url . EOL;
}