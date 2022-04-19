<?php

namespace app;

class Router {

    // store the routes
    public array $getRoutes = [];
    public array $postRoutes = [];
    
    public Database $db;

    public function __construct() {
        $this->db = new Database();
    }
    
    // get routes
    public function get($url, $fn) {
        $this->getRoutes[$url] = $fn;
    }

    // posts routes
    public function post($url, $fn) {
        $this->postRoutes[$url] = $fn;
    }

    // detect the current routes
    public function resolve() {
        // if no path, set to home 
       $currentUrl = $_SERVER['REQUEST_URI'] ?? '/';
       
       if (strpos($currentUrl, '?') !== false) {
           $currentUrl = substr($currentUrl, 0, strpos($currentUrl,'?'));
       }
       
       $method = $_SERVER['REQUEST_METHOD'];

       if ($method === 'GET') {
           $fn = $this->getRoutes[$currentUrl] ?? null;
       } else {
          $fn = $this->postRoutes[$currentUrl] ?? null;
       }

       if ($fn) {
           call_user_func($fn, $this);

       } else {
           echo "Page not found";
       }

    }

    // control what views to render
    public function renderView($view, $params = []) { 
        foreach ($params as $key => $value) {

            // convert the assoc array to value with $$
            $$key = $value;

        }
        
        ob_start();
        include __DIR__."/views/$view.php";
        $content = ob_get_clean();
        include __DIR__."/views/_layout.php";
    }
}