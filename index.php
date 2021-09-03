<?php
require_once("configuration/database.php");
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style.css">
    <title>PHP</title>
</head>
<body>

<div class="wrapper">
    
<div class="logo">
        <h1>Użytkonicy</h1>
    </div>

    <div class="container">
        <?php require_once("pages/view.php") ?>
    </div>

    <div class="footer">
        <h1>Lista użytkowników</h1>
    </div>

</div>
</body>
</html>