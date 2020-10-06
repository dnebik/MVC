<?php

/* @var $content string */
/* @var $this View */

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->title ?></title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
</head>
<body>

<div class="wrap">
    <header>
    <h1>Шапка</h1>
    </header>

    <div>
        <? include $content ?>
    </div>
    
    <footer>
    <h1>Подвал</h1>
    </footer>
</div>


</body>
</html>

<script src="plugins/jquery-3.5.1.min.js"></script>
<script src="plugins/bootstrap/bootstrap.js"></script>