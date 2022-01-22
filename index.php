<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Парковые территории Москвы</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Cuprum|Oswald|Rubik+Mono+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
    <div class="container">
        <nav class="main-menu">
            <a href="index.php"><img class="logo" src="images\logo.png"></a>
            <a href="index.php">Парковые территории Москвы</a>
            <a class="right" href="index.php">Главная</a>
            <a class="right" href="areas.php">Округа</a>
            <a class="right" href="">Где мне погулять?</a>
        </nav>
    </div>
</header>

<main>
    <div class="container">
        <section id="about">
            <h1>О нас</h1>
            <p>Хочешь гулять, но не знаешь где? Тогда ты попал по адресу!</p>
            
        </section>
    </div>
    
    <section >
    <div class="container">
            <?=$content?>
    </div>
    </section>
    
</main>

<footer class="footer">
    <div class="container" >
        <p>
        <?php
            date_default_timezone_set("Europe/Moscow");
            echo '<p class="container">&copy; Некрасова Е.М.    Сформированно: '.date("d.m.y в H-i.s").'<p>';
            ?>
        </p>
    </div>
</footer>
</body>
</html>