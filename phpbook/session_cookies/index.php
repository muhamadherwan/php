<?php

session_start();

$counter = 0;

$_SESSION['page_counter'] = $_SESSION['page_counter'] ?? 0;
$_SESSION['page_counter']++;

$counter = $_SESSION['page_counter'];

if ($counter === 10) {
    $counter = 'Tq for visiting for 10 times';
    session_unset();
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Session and Cookies</title>
</head>
<body>
    <h1>Session</h1>
    <p><?php echo $counter; ?></p>
</body>
</html>