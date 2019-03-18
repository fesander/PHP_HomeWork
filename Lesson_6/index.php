<?
include "config.php";

//Сортировка таблицы исходя из количествапросмотров товара
$sql = "select * from bigimages ORDER BY views DESC";
$res = mysqli_query($connect, $sql);

$sql = "select * from reviews";
$reviewsSelect = mysqli_query($connect, $sql);

function add($x, $y) {
    return $x + $y;
}
function sub($x, $y) {
    return $x - $y;
}
function mul($x, $y) {
    return $x * $y;
}
function div($x, $y) {
    if ( $y != 0)
        return $x / $y;
    else
        return "Деление на 0";
}

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "+":
            return add($arg1,$arg2);
        case "-":
            return sub($arg1,$arg2);
        case "*":
            return mul($arg1,$arg2);
        case "/":
            return div($arg1,$arg2);
        default:
            return "$operation - Неверная операция";
    }
}

function  getOperation($o) {
    switch ($o) {
        case 0:
            return "+";
        case 1:
            return "-";
        case 2:
            return "*";
        case 3:
            return "/";
    }
}

$x = rand(0,10);
$y = rand(0,10);
$operation = getOperation(rand(0,3));

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
    <div class="container column">
        <h2>Каталог</h2>
        <div class="photo">
            <?
            $galleryItems = "";
            while($data = mysqli_fetch_assoc($res)) {
                $smallImage = "./small/".$data['name'];
                $galleryItems.="<div>";
                $galleryItems.="<a href=\"showBigImage.php?id=".$data['id']."\">";
                $galleryItems.="<img src=\"".$smallImage."\" id=\"".$data['name']."\" class=\"chair\">";
                $galleryItems.="</a>";
                $galleryItems.="</div>";
            }
            echo $galleryItems;
            ?>
        </div>
        <h2>Оставить отзыв</h2>
        <form class="sendReviews" action="addReview.php" method="post">
            <input type="text" name="name" placeholder="Введите свое имя">
            <textarea name="review" id="review" cols="20" rows="10" placeholder="Текст отзыва о магазине"></textarea>
            <span><?echo "Выберите правильный знак операции: " . $x?></span>
            <select name="operation" id="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <?echo $y . " = " . mathOperation($x, $y, $operation)?>
            <input type="hidden" name="hid" value="<?=$operation?>">
            <input type="submit" value="Опубликовать отзыв">
        </form>
        <h2>Отзывы</h2>
        <div class="reviews">
            <?
            $reviewsItems = "";
            while($data = mysqli_fetch_assoc($reviewsSelect)) {
                $reviewsItems.="<div class='review'>";
                $reviewsItems.="<h4>" . $data['reviewer'] . "</h4>";
                $reviewsItems.="<p>" . $data['review'] . "</p>";
                $reviewsItems.="<a href='deleteReview.php?id=".$data['id']."'><i class=\"icon fas fa-trash-alt\"></i></a>";
                $reviewsItems.="<a href='updateFeedback.php?id=".$data['id']."'><i class=\"icon fas fa-edit\"></i></a>";
                $reviewsItems.="</div>";
            }
            echo $reviewsItems;
            ?>
        </div>
    </div>
</body>
</html>