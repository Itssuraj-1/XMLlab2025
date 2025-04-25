<?php
// Load the XML file
$xml = simplexml_load_file("Bookstore.xml") or die("Error: Cannot load XML file");

//Loop through each <book> element
foreach ($xml->book as $book) {
    // Get the title and author
    $title = (string)$book->title;
    $author = (string)$book->author;

    // Get the price and currency
    $price = (float)$book->price;
    $currency = (string)$book->price['currency'];

    // Get the publication date
    $pubDate = (string)$book->pub_date;

    // Print the book details
    echo "Title: $title\n";
    echo "Author: $author\n";
    echo "Price: $price $currency\n";
    echo "Publication Date: $pubDate\n";
    echo "------------------------\n";
}