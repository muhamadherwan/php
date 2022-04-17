<?php

namespace app\controllers;

use app\Router;

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

    public function create() {
        echo "create page";
    }

    public function update() {
        echo "update page";
    }

    public function delete() {
        echo "delete page";
    }
}