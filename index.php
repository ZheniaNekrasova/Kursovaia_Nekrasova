<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Парковые территории Москвы</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Cuprum|Oswald|Rubik+Mono+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=7b066ca0-30c0-4377-8773-5f9174a5b251&lang=ru_RU" type="text/javascript"></script>
    <!-- <script src="main.js" type="text/javascript"></script> -->
    
</head>
<body>
<header class="header">
    <div class="container">
        <nav class="main-menu">
            <a href="glav.php"><img class="logo" src="images\logo.png"></a>
            <a href="glav.php">Парковые территории Москвы</a>
            <a class="right" href="glav.php">Главная</a>
            <a class="right" href="areas.php">Округа</a>
            <a class="right" href="where.php">Где мне погулять?</a>
        </nav>
    </div>
</header>

<main>
    <?=$content?>
</main>

<footer class="footer">
    <div class="container" >
        <p>
        <?php
            date_default_timezone_set("Europe/Moscow");
            echo '<p class="container">&copy; Некрасова Е.М. | <b>Дата и Время:</b> '.date("d.m.y в H-i.s").'<p>';
            ?>
        </p>
    </div>
</footer>
</body>
</html>