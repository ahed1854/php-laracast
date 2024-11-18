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
            "purchaseUrl" => "https://example.com"
        ],
        [

            "name" => "The Langoliers",
            "author" => "Andy Weir",
            "purchaseUrl" => "https://example.com"
        ],
        [

            "name" => "Project Hail Marry",
            "author" => "Andy Weir",
            "purchaseUrl" => "https://example.com"
        ],
    ];

    ?>

    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <a href="<?= $book["purchaseUrl"] ?>">
                    <?= $book["name"] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>