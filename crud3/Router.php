<?php

namespace app;

class Router {

    // store the routes
    public array $getRoutes = [];
    public array $postRoutes = [];
    
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
       $currentUrl = $_SERVER['PATH_INFO'] ?? '/'; 
       
       $method = $_SERVER['REQUEST_METHOD'];

       if ($method === 'GET') {
           $fn = $this->getRoutes[$currentUrl] ?? null;
       } else {
          $fn = $this->postRoutes[$currentUrl] ?? null;
       }

       if ($fn) {
           call_user_func($fn);

       } else {
           echo "Page not found";
       }

    }
}