<?php

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$imagePath = '';

if (!$title) {
    $errors[] = 'Product title is required';
}

if (!$price) {
    $errors[] = 'Product price is required';
}

// upload image
if (empty($errors)) {

    // create image directory to store uploaded images.
    if (!is_dir('images')) {
        mkdir('images');
    }

    $image = $_FILES['image'] ?? null;
    $imagePath = $product['image'];

    if ($image && $image['tmp_name']) {
        // remove image
        if ($product['image']) {
            unlink($product['image']);
        } 

        // create unique images path using randomString()
        // and uploaded image name.
        $imagePath = 'images/'.randomString(8).'/'.$image['name'];

        // create directory to store the upload images
        // with the images path
        mkdir(dirname($imagePath));

        // stored the uploaded image inside the directory
        move_uploaded_file($image['tmp_name'], $imagePath);
    }
}