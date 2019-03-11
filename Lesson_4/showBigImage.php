<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Работа с файлами</title>
</head>
<body>
    <div>
        <?
            $big = "big/";
            $smallPictures = array_slice(scandir($big),2);
        ?>
        <img src="<?=$big.$_GET['image'] ?>">
    </div>
</body>
</html>