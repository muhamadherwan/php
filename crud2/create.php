<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// connect to database
require_once "database.php";

// require function
require_once "function.php"; 

$errors = [];
$title = '';
$description = '';
$price = '';
$product = [
    'image' => ''
];

// print $_SERVER['REQUEST_METHOD']; 
// create new product
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once "validate_product.php";

    if (empty($errors)) {

        // insert in db.
        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date) VALUE (:title, :image, :description, :price, :date)");

        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', date('Y-m-d H:i:s'));
        $statement->execute();
        header('Location: index.php');
    }
    
}

?>

<?php include_once "views/partials/header.php"; ?>

    <h1>Create New Product</h1>
    <p>
          <a href="index.php" class="btn btn-secondary">Back</a>
      </p>

  <?php include_once "views/products/form.php" ?>

    </body>
</html>