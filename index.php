<?php

$books = [
    [

        "name" => "Do Androids dream of Electric Sheeps",
        "author" => "Philip K. Dick",
        "releaseYear" => 1968,
        "purchaseUrl" => "https://example.com"
    ],
    [

        "name" => "The Langoliers",
        "author" => "Andy Weir",
        "releaseYear" => 2021,
        "purchaseUrl" => "https://example.com"
    ],
    [

        "name" => "The Martian",
        "author" => "Andy Weir",
        "releaseYear" => 2011,
        "purchaseUrl" => "https://example.com"
    ],
];

$filteredBooks = array_filter($books, function ($books) {
    return $books["author"] === "Andy Weir";
});

require "index.view.php";
