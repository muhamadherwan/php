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
        $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=product_crud', 'root', 'root');
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

    public function deleteProduct($id) {
        $statement = $this->pdo->prepare('DELETE FROM products WHERE id = :id');
        $statement->bindValue(':id', $id);
        return $statement->execute();
    }

    public function getProductById($id) {
        $statement = $this->pdo->prepare('SELECT * FROM products WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function updateProduct(Product $product) {
        $statement = $this->pdo->prepare("UPDATE products SET title = :title, image = :image, description = :description, price = :price WHERE id = :id");
        
        $statement->bindValue(':title', $product->title);
        $statement->bindValue(':image', $product->imagePath);
        $statement->bindValue(':description',$product->description);
        $statement->bindValue(':price', $product->price);
        $statement->bindValue(':id', $product->id);

        $statement->execute();
    }

}
