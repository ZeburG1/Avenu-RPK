<!DOCTYPE html>
<html>
    <head>
        <title>Галлерея</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/gallery.css">
        <link rel="icon" href="images/main/Logo-title.png">
    </head>
    <body>
        
        <header>
            <img class="logo" src="images/main/logo.png">
        </header>

        <main class="gallery">
            <div class="gallery-main">
                <a href="./index.php">На главную</a>
                <p>Галерея работ</p>
                <div class="images">
                    <div class="container">
                        <div class="box">
                            <img src="images/gallery/photo_2024-06-30_17-26-29.jpg">
                          <span>Обклейка машины</span>
                        </div>
                        <div class="box">
                            <img src="images/gallery/photo_2024-06-30_17-26-28 (2).jpg">
                          <span>Обклейка ценников</span>
                        </div>
                        <div class="box">
                            <img src="images/gallery/photo_2024-06-30_17-26-28.jpg">
                          <span>Таблички и обклейка сети "сковородка"</span>
                        </div>
                        <div class="box">
                            <img src="images/gallery/photo_2024-06-30_17-26-30.jpg">
                          <span>Плакат для сатурн-р</span>
                        </div>
                        <div class="box">
                            <img src="images/gallery/photo_2024-06-30_17-26-31 (2).jpg">
                          <span>Вывеска для Депо</span>
                        </div>
                        <div class="box">
                            <img src="images/gallery/photo_2024-06-30_17-26-31.jpg">
                          <span>Принт для футболки</span>
                        </div>
                    </div>
                    <div class="container">
                        <div class="box">
                            <img src="images/gallery/photo_2024-06-30_17-26-32 (2).jpg">
                          <span>Вывеска "сковородка"</span>
                        </div>
                        <div class="box">
                            <img src="images/gallery/photo_2024-06-30_17-26-32.jpg">
                          <span>Вывеска и обкслейка сети "Перекресток"</span>
                        </div>
                        <div class="box">
                            <img src="images/gallery/photo_2024-06-30_17-26-33 (2).jpg">
                          <span>Вывеска с номирами офисов Администрации октябрьского района г.Екатеринбург</span>
                        </div>
                        <div class="box">
                            <img src="images/gallery/photo_2024-06-30_17-26-34.jpg">
                          <span>Вывеска для сети "СберБанк"</span>
                        </div>
                        <div class="box">
                            <img src="images/gallery/photo_2024-06-30_17-26-39.jpg">
                          <span>Вывеска для сети "Лента"</span>
                        </div>
                        <div class="box">
                            <img src="images/gallery/photo_2024-06-30_17-26-40.jpg">
                          <span>Вывеска для сети "Лента"</span>
                        </div>
                    </div>
                    <div class="container">
                        <div class="box">
                            <img src="images/gallery/photo_2024-07-01_22-30-59.jpg">
                            <span>Принт для рабочей формы</span>
                        </div>
                        <div class="box">
                            <img src="images/gallery/photo_2024-07-01_22-31-00.jpg">
                            <span>Вывеска оказания первой помощи</span>
                        </div>
                        <div class="box">
                            <img src="images/gallery/photo_2024-07-01_22-31-01.jpg">
                            <span>Вывеска Фитнес для СК Олимпии</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <div class="footer-info">
                <p>Заказать услуги можно позвонив сюда:<br>Екатерина Менеджер: +79197007715<br>Максим Валерьевич: +79523339334</p>
            </div>

            <div class="footer-icons">
                <a href="https://vk.com/aveprm"><img src="images/vk.png"></a>
                <a href="https://github.com/ZeburG1"><img src="images/github.png"></a>
            </div>
        </footer>
        <script type="text/javascript" src="scripts/main.js"></script>
    </body>
</html>
<?php
// Для будущей админ панели
$link=mysqli_connect("localhost", "login", "password", "name");
if ($link != 0 || $link != "0"){
    echo "<script>console.log('Подключилось')</script>";
} else {
    echo "<script>console.log('Не подключилось')</script>";
}
?>