<?php
require_once __DIR__ . '/includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RuShop</title>
    <!-- ccs, bootstrap -->
    <link rel="stylesheet" href="<?=baseUrl('/assets/css/style.css')?>">
    <link rel="stylesheet" href="<?=baseUrl('/assets/css/bootstrap/bootstrap.min.css')?>">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?=component('navbar');?>

    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>