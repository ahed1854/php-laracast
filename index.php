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

    function filterByAuthor($books, $author)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book["author"] === $author) {
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    }

    ?>

    <ul>
        <?php foreach (filterByAuthor($books, "Andy Weir") as $book): ?>
            <li>
                <a href="<?= $book["purchaseUrl"] ?>">
                    <?= $book["name"] ?> (<?= $book["releaseYear"] ?>) - By (<?= $book["author"] ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>