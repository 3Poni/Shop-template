<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/userlayout.css">
    <title>Личный кабинет</title>
</head>
<body>
<header>
    <nav class="navbar-top">
        <div class="nav-item"><a href="/admin">Главная личного кабинета</a></div>
        <div class="nav-item"><a href="/">Вернуться в магазин</a></div>
        <div class="nav-item"><a href="/logout">Выйти</a></div>
    </nav>
</header>
<div class="container">
<div class="left-sidebar">
    <a href="/user/settings"><div class="l-s-item">Настройки</div></a>
    <a href="/user/orders"><div class="l-s-item">Мои заказы</div></a>
</div class="main">
    <?php require_once __DIR__ . $view; ?>
</div>
</body>
</html>
