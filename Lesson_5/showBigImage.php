<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Работа с файлами</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <?
            include "config.php";
            // Находим втаблице товар по переданному id
            $sqlImage = "SELECT * FROM bigimages WHERE id=\"".$_GET['id']."\"";
            $res = mysqli_fetch_assoc(mysqli_query($connect, $sqlImage));

            // Получаем путь до большой картинки из базы
            $imagePath = $res["path"]."/".$res['name'];

            // Инкрементируем количество просмотров
            $currentViewNumber = $res["views"];
            $currentViewNumber++;

            // Абдейтим значение в базе
            $sqlUpdateViews = "update bigimages set views=$currentViewNumber where id=\"".$res["id"]."\"";
            if(!mysqli_query($connect, $sqlUpdateViews)) {
                echo "Ошибка при абдейте базы";
            }
        ?>
        <img src="<?=$imagePath?>">
        <div class="views_number">Количество просмотров: <?=$currentViewNumber?></div>
        <a href="index.php" class="to_main_page"><-- Вернуться на главную</a>
    </div>
</body>
</html>