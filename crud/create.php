<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// connect to database
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=product_crud', 'root', 'wasd1234');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // if cant connect, throw error

// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';
// exit;

$errors = [];
$title = '';
$description = '';
$price = '';

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
        if ($image) {

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
    }
    
}

// create random string for image upload
function randomString($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $str .= $characters[$index];
    }

    return $str;
}



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="app.css">

    <title>CRUD</title>
  </head>
  <body>
    <h1>Create New Product</h1>

    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
                <div><?php echo $error ?></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Product Image</label>
            <br>
            <input type="file" name="image">
        </div>

        <div class="mb-3">
            <label>Product Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
        </div>

        <div class="mb-3">
            <label>Product Description</label>
            <textarea class="form-control" name="description"><?php echo $description ?></textarea>
        </div>

        <div class="mb-3">
            <label>Product Price</label>
            <input type="number" step=".01" name="price" class="form-control" value="<?php echo $price ?>">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    

    </body>
</html>