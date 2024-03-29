<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <!--Подключаем иконочный шрифт-->
    <link rel="stylesheet" href="css/all.css">

    <title>Картридж плюс - панель управления</title>
</head>
<body>
<!--Меню для сайта-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">KPlus</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="menu">
        <?php if (isset($_SESSION['userID'])){ ?>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../index.php">Работы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Отчеты</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/users/logout">Выйти</a>
            </li>
        </ul>
        <?php } ?>
    </div>
</nav>

<!--Основной контент сайта-->
<?php
    include ($contentPage);
?>

<!--Подвал сайта-->
<div class="container-fluid slide10">
    <div class="row text-center">
        <div class="col">
            © Все права защищены 2009г. - 2019г.<br>
            ИП Димов А.А. ИНН 790153151885
        </div>
    </div>
</div>

</body>
</html>