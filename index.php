<?php

require "functions.php";
// require "router.php";

// connect to MySql database

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

// this will prepare the query we're going to send
$statement = $pdo->prepare("select * from posts");

// executing the query
$statement->execute();

// fetching the resaults
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post["title"] . "</li>";
}
