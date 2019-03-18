<?
    include "config.php";

    $tpl = file_get_contents('templates/showBigImage.tpl');

    // Находим втаблице товар по переданному id
    $sqlImage = "SELECT * FROM bigimages WHERE id=\"".(int)$_GET['id']."\"";
    $res = mysqli_fetch_assoc(mysqli_query($connect, $sqlImage));

    // Получаем путь до большой картинки из базы
    $imagePath = "./big/".$res['name'];

    // Инкрементируем количество просмотров
    $currentViewNumber = $res["views"];
    $currentViewNumber++;

    $bigImage = "<img src=\"$imagePath\">";
    $title = 'picture id='.$res["title"];

    // Абдейтим значение в базе
    $sqlUpdateViews = "update bigimages set views=$currentViewNumber where id=\"".$res["id"]."\"";
    if(!mysqli_query($connect, $sqlUpdateViews)) {
        echo "Ошибка при абдейте базы";
    }

    // Получаем информацию из таблицы chairs и присваиваем её в переменные
    $sqlDescription = "SELECT * FROM chairs WHERE id=\"".(int)$_GET['id']."\"";
    $res = mysqli_fetch_assoc(mysqli_query($connect, $sqlDescription));

    $chairName = $res["title"];
    $chairDesc = $res["short"];
    $chairPrice = $res["price"];
    $chairCare = $res["care"];

    $pieces = explode("\n", $res["size"]);
    foreach ($pieces as $prop) {
        $chairSize .="<i class='properties'>$prop</i>";
    }

    mysqli_close($connect);

$patterns = array( '/{title}/', '/{bigImage}/', '/{name}/','/{short}/', '/{care}/', '/{size}/', '/{price}/', '/{views}/' );
$replace = array( $title, $bigImage, $chairName, $chairDesc, $chairCare, $chairSize, $chairPrice, $currentViewNumber );
echo preg_replace( $patterns, $replace, $tpl );