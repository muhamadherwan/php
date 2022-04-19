<?php

namespace app;

use app\models\Product;

use PDO;

class Database {

    // props
    public \PDO $pdo;
    // public $pdo;

    public static Database $db;

    public function __construct() {

        // connect to database
        $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=product_crud', 'root', 'wasd1234');
        // if cant connect, throw error
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        self::$db = $this;
        
    }

    public function getProducts( $search='' ) {

        if ($search) {
            // read products
            $statement = $this->pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC');
            $statement->bindValue(':title', "%$search%");
        } else {
            // read products
            $statement = $this->pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
        }

        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createProduct(Product $product) {
        // insert in db.
        $statement = $this->pdo->prepare("INSERT INTO products (title, image, description, price, create_date) VALUE (:title, :image, :description, :price, :date)");

        $statement->bindValue(':title', $product->title);
        $statement->bindValue(':image', $product->imagePath);
        $statement->bindValue(':description', $product->description);
        $statement->bindValue(':price', $product->price);
        $statement->bindValue(':date', date('Y-m-d H:i:s'));
        $statement->execute();
    }
}
