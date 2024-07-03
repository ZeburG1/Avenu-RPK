<!DOCTYPE html>
<html>
    <head>
        <title>Авеню РПК</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/desktop.css">
        <link rel="icon" href="images/main/Logo-title.png">
    </head>
    <body>
        
        <header>
            <img class="logo" src="images/main/logo.png">
        </header>

        <main>
            <p class="main-text">Авеню РПК - наша компания занимается производством и монтажом наружной рекламы, плакатов, наклеек, элементов декора, нанесение логотипов на спецодежду, брендированием авто, широкоформатной печатью, таблички, указатели, лазерные работы, световые вывески, оформление и многое другое.
            </p>
            <div class="gallery">
                <div class="gallery-main">
                    <p>Галерея работ</p>
                    <a class="images" href="gallery.php">
                        <img src="images/gallery/photo_2024-06-30_17-26-29.jpg">
                        <img src="images/gallery/photo_2024-06-30_17-26-28 (2).jpg">
                        <img src="images/gallery/photo_2024-06-30_17-26-28.jpg">
                        <img src="images/gallery/photo_2024-06-30_17-26-30.jpg">
                        <img src="images/gallery/photo_2024-06-30_17-26-31 (2).jpg">
                        <img src="images/gallery/photo_2024-06-30_17-26-31.jpg">
                        <img src="images/gallery/photo_2024-06-30_17-26-32 (2).jpg">
                        <img src="images/gallery/photo_2024-06-30_17-26-32.jpg">
                        <img src="images/gallery/photo_2024-06-30_17-26-33 (2).jpg">
                        <img src="images/gallery/photo_2024-06-30_17-26-34.jpg">
                        <img src="images/gallery/photo_2024-06-30_17-26-39.jpg">
                        <img src="images/gallery/photo_2024-06-30_17-26-40.jpg">

                    </a>
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
$link=mysqli_connect("localhost", "root", "", "JapanSrv");
if ($link != 0 || $link != "0"){
    echo "<script>console.log('Подключилось')</script>";
} else {
    echo "<script>console.log('Не подключилось')</script>";
}
?>