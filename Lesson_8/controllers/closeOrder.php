<?
include "../model/model.php";
// SQL запрос для добавления нового отзыва в таблицу

$thisId = (int)$_POST['id'];

$mysqli_query = sprintf("DELETE FROM `userorders` WHERE `userorders`.`order_id` = %d", $thisId);
if(!mysqli_query($connect, $mysqli_query)) {
    echo "Ошибка при очистке базы";
}
else {
    $mysqli_query = sprintf("DELETE FROM `all_orders` WHERE `all_orders`.`order_id` = %d", $thisId);
    if(!mysqli_query($connect, $mysqli_query)) {
        echo "Ошибка при очистке базы";
    }
    else
        echo "true";
}