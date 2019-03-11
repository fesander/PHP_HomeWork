<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <div class="photo">
            <!--Первый вариант решения через GET запрос и отдельный файл для отображения большой картинки-->
            <?
            $small = "small/";
            $big = "big/";
                $smallPictures = array_slice(scandir($small),2);
                foreach ($smallPictures as $picture) {
                    $fileName = pathinfo($small.$picture)[filename];
                    echo
                        "<a href=\"showBigImage.php?image=$picture\">
                            <img src=\"".$small.$picture."\" alt=\"\" id=\"".$fileName."\" class=\"chair\">
                        </a>";
                }
            ?>
            <!--Второй вариант решения через target="_blank", как по мне самый простой-->
    <!--        --><?//
    //        $small = "small/";
    //        $big = "big/";
    //        $smallPictures = array_slice(scandir($small),2);
    //        $smallPictures = array_slice(scandir($big),2);
    //        foreach ($smallPictures as $picture) {
    //            $fileName = pathinfo($small.$picture)[filename];
    //            echo
    //                "<a href=\"".$big.$picture."\" target='_blank'>
    //                        <img src=\"".$small.$picture."\" alt=\"\" id=\"".$fileName."\" class=\"chair\">
    //                    </a>";
    //        }
    //        ?>
        </div>
        <!--Загрузка фотографий-->
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="file-upload" class="custom-file-upload">
                Выберете файл
            </label>
            <input type="file" name="uploadedFile" id="file-upload">
            <button type="submit" name="send">Загрузить фото</button>
        </form>
        <?
            function resizeImg($h, $w, $src, $newSrc)
            {
                $newImg = imagecreatetruecolor($h, $w);
                $img = imagecreatefromjpeg($src);
                imagecopyresized($newImg, $img, 0, 0, 0, 0, $h, $w, imagesx($img), imagesy($img));
                imagejpeg($newImg, $newSrc);
            }
            if (isset($_POST['send'])) {
                if ($_FILES['uploadedFile']['type'] != 'image/jpeg')
                    echo "Ошибка в типе файла!<br>Должен быть jpeg<br>Текущий тип - ".$_FILES['uploadedFile']['type'];
                else if (copy($_FILES['uploadedFile']['tmp_name'], $big.$_FILES['uploadedFile']['name'])) {
                    $path = $small . $_FILES['uploadedFile']['name'];
                    resizeImg(150, 150, $_FILES['uploadedFile']['tmp_name'], $path);
                    echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
                }
                else
                    echo 'Ошибка загрузки файла!';
            }
        ?>
    </div>
</body>
</html>