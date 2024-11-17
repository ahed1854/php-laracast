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
        "Do Androids dream of Electric Sheeps",
        "The Langoliers",
        "Hail Marry"
    ];

    ?>

    <ul>
        <?php
        foreach ($books as $book) {
            // echo "<li>" . $book . "</li>";
            echo "<li>$book</li>";
        }
        ?>

        <br />
        <!-- An other way of using conditionals or loops is this: -->
        <?php foreach ($books as $book): ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>