<!DOCTYPE html>
<html lang="en">
<?php error_reporting(E_ERROR | E_PARSE); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>

<header>
    <div style="margin: 10px;">
        #my-shop
    </div>
    <div class="header_mid">
        <div class="blocks">Home</div>
        <div class="blocks">Comments</div>
    </div>
    <div class="blocks">Exit</div>
</header>

<main>
    <?php include 'head/form-head.php';?>
    <?php include 'view/form.php';?>
</main>

<footer>
    <?php include 'view/comments.php';?>
</footer>

</body>

</html>