<?
include "config.php";

//Сортировка таблицы исходя из количествапросмотров товара
$sql = "select * from bigimages ORDER BY views DESC";
$res = mysqli_query($connect, $sql);
?>

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
            <?
            $galleryItems = "";
            while($data = mysqli_fetch_assoc($res)) {
                $smallImage = $data['smallPath']."/".$data['name'];
                $galleryItems.="<div>";
                $galleryItems.="<a href=\"showBigImage.php?id=".$data['id']."\">";
                $galleryItems.="<img src=\"".$smallImage."\" id=\"".$data['name']."\" class=\"chair\">";
                $galleryItems.="</a>";
                // Выводим количество просмотров на эту страницу тоже, для удобства
                $galleryItems.="<div class=\"views_number\">(".$data['views'].")</div>";
                $galleryItems.="</div>";
            }
            echo $galleryItems;
            ?>
    </div>
</body>
</html>