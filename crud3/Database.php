<?php

namespace app;

use PDO;

class Database {

    // props
    public \PDO $pdo;

    public function __construct() {

        // connect to database
        $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=product_crud', 'root', 'wasd1234');
        // if cant connect, throw error
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    }

    public function getProducts( $search='' ) {

        if ($search) {
            // read products
            $statement = $this->pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC');
            $statement->bindValue(':title', "%$search%");
        } else {
            // read products
            $statement = $this->$pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
        }

        $statement->execute();
        $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
