<?php

namespace app\controllers;

use app\Router;
use app\models\Product;

class ProductController {
    
    public function index(Router $router) {
        
        // get the data from db
        $search = $_GET['search'] ?? '';
        $products = $router->db->getProducts($search);

        // get the page views
        $router->renderView('products/index',[
            'products' => $products,
            'search' => $search
        ]);

    }

    public function create(Router $router) {
        $errors = [];
        $productData = [
            'title' => '',
            'description' => '',
            'image' => '',
            'price' => '',
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $productData['title'] = $_POST['title'];
            $productData['description'] = $_POST['description'];
            $productData['price'] = (float)$_POST['price'];
            $productData['imageFile'] = $_FILES['image'] ?? null;
            
            $product = new Product();
            $product->load($productData);
            $errors = $product->save();
            if (empty($errors)) {
                header('Location: /products');
                exit;
            }
            
        }

        echo '<pre>';
        var_dump($productData);
        echo '</pre>';
    

        // render/output the page layout with the data
        $router->renderView('products/create', [
            'product' => $productData,
            'errors' => $errors
        ]);
    }

    public function update() {
        echo "update page";
    }

    public function delete() {
        echo "delete page";
    }
}