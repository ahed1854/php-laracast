<?php

// connect to database, and execute a query
class Database {

    // creating a variable that we can access it anywhere in the class
    public $connection;

    public function __construct() {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";
        $this->connection = new PDO($dsn);
    }
    public function query($query) {

        // this will prepare the query we're going to send
        $statement = $this->connection->prepare($query);

        // executing the query
        $statement->execute();

        // fetching the resaults
        return $statement;
    }
}
