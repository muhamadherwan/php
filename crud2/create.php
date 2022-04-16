<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// connect to database
require_once "database.php";

// require function
require_once "function.php"; 

// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';
// exit;

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
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $date = date('Y-m-d H:i:s');

    if (!$title) {
        $errors[] = 'Product title is required';
    }

    if (!$price) {
        $errors[] = 'Product price is required';
    }

    // create image directory to store uploaded images.
    if (!is_dir('images')) {
        mkdir('images');
    }

    if (empty($errors)) {

        // upload image
        $image = $_FILES['image'] ?? null;
        $imagePath = '';
        if ($image && $image['tmp_name']) {

            // create unique images path using randomString()
            // and uploaded image name.
            $imagePath = 'images/'.randomString(8).'/'.$image['name'];

            // create directory to store the upload images
            // with the images path
            mkdir(dirname($imagePath));

            // stored the uploaded image inside the directory
            move_uploaded_file($image['tmp_name'], $imagePath);
        }
  
        // insert in db.
        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date) VALUE (:title, :image, :description, :price, :date)");

        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', $date);
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