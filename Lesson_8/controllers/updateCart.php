<?
include "../model/model.php";
// SQL запрос для добавления нового отзыва в таблицу

$thisId = (int)$_POST['id'];
$thisCount = (int)$_POST['count'];

if ($thisCount == 0)
    $mysqli_query = sprintf("DELETE FROM `cart` WHERE `cart`.`id` = %d", $thisId);
else
    $mysqli_query = sprintf("UPDATE `cart` SET `count` = %d WHERE `cart`.`id` = %d", $thisCount, $thisId);

if(!mysqli_query($connect, $mysqli_query)) {
    echo "Ошибка при абдейте базы";
}
else
    echo "true";
