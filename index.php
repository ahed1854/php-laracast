<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Document</title>
</head>

<body>

    <h1>Recommended Books</h1>

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

    // this code we wrote works fine
    // $filter = function ($items, $fn) {
    //     $filteredItems = [];

    //     foreach ($items as $item) {
    //         if ($fn($item)) {
    //             $filteredItems[] = $item;
    //         }
    //     }

    //     return $filteredItems;
    // };

    // $filteredBooks = $filter($books, function ($books) {
    //     return $books["releaseYear"] >= 2011;
    // });

    // this code is provided by PHP
    $filteredBooks = array_filter($books, function ($books) {
        return $books["author"] === "Andy Weir";
    });

    ?>

    <ul>
        <?php foreach ($filteredBooks as $book): ?>
            <li>
                <a href="<?= $book["purchaseUrl"] ?>">
                    <?= $book["name"] ?> (<?= $book["releaseYear"] ?>) - By (<?= $book["author"] ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>