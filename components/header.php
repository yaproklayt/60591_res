<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Интернет-магазин товаров для дома</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
<div id="inhelp_widget"></div>
<script src="http://mr_151805372.inhelp.osipov.digital/js/widget.js"></script>
<header class="site-header">
    <nav class="site-navigation">
        <a class="logo-link" href="index.php">
            <img src="img/logo-full.svg" width="62" height="17" alt="Логотип магазина gloevk">
        </a>
        <ul class="navigation-list">
            <li><a href="catalog.php">Каталог</a></li>
            <?php
            if ($_SESSION['username']) {
                echo ('<li><a href="product_add.php">Добавить продукт</a></li>');
                echo ('<li><a href="login.php?logout=1">'.$_SESSION['username'].' (Выйти) </a></li>');
            }
            else {
                echo (' <li><a href="login.php">Войти</a></li>');
            }
            ?>
            <li><a href="contacts.html">Контакты</a></li>

        </ul>
    </nav>
</header>