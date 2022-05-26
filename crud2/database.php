<?php

// connect to database
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=product_crud', 'root', 'root');
// if cant connect, throw error
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
