<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/layout.css" >
    <title>Интернет-магазин</title>
</head>
<body>
<header class="container">
    <div class="navbar-top">
        <div class="nav-itm">
            <a href="/" class="menu">Главная</a>
        </div>
        <div class="nav-itm">
            <a href="/items" class="menu">Товары</a>
        </div>
        <div class="nav-itm">
            <a href="/categories" class="menu">Категории</a>
        </div>
        <div class="nav-itm">
            <a href="/login" class="menu">Личный кабинет</a>
        </div>
        <div class="nav-itm" id="cart">
            <a href="/cart" class="menu">Корзина: <?php if(!empty($_SESSION['cart'])){ echo ($_SESSION['cart.qty']);}else echo '0' ?></a>
        </div>
        <div class="nav-search"  >
            <form method="get" action="/items/search/">
                <input class="input-text" name="search" id="search" type="text" placeholder="Что искать?">
            </form>
        </div>
    </div>
</header>
<?php require_once __DIR__ . $view; ?>
</body>
</html>