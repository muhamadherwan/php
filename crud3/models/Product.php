<?php

namespace app\models;

use app\Database;
use app\helpers\UtilHelper;

class Product {
    public ?int $id = null;
    public ?string $title = null;
    public ?string $description = null;
    public ?float $price = null;
    public ?string $imagePath = null;
    public ?array $imageFile = null;

    public function load($data) {
        $this->id = $data['id'] ?? null;
        $this->title = $data['title'];
        $this->description = $data['description'] ?? '';
        $this->price = $data['price'];
        $this->imageFile = $data['imageFile'] ?? null;
        $this->imagePath = $data['image'] ?? null;
    }

    public function save() {
        $errors = [];

        if (!$this->title) {
            $errors[] = 'Product title is required';
        }

        if (!$this->price) {
            $errors[] = 'Price is required';
        }

        // create image directory to store uploaded images.
        if (!is_dir(__Dir__.'/../public/images')) {
            mkdir(__Dir__.'/../public/images');
        }

        if (empty($errors)) {

            if ($this->imageFile && $this->imageFile['tmp_name']) {
                
                // remove image
                if ($this->imagePath) {
                    unlink(__DIR__.'/../public/'.$this->imagePath);
                } 

                // create unique images path using randomString()
                // and uploaded image name.
                $this->imagePath = 'images/'.UtilHelper::randomString(8).'/'.$this->imageFile['name'];

                // create directory to store the upload images
                // with the images path
                mkdir(dirname(__DIR__.'/../public/'.$this->imagePath));

                // stored the uploaded image inside the directory
                move_uploaded_file($this->imageFile['tmp_name'], __DIR__.'/../public/'.$this->imagePath);
            }

            $db = Database::$db;
            if ($this->id) {
                $db->updateProduct($this);
            } else {
                $db->createProduct($this);
            }

        }

        return $errors;

    } 
}