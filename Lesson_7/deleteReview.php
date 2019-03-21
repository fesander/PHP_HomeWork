<?
    include "config.php";

    // SQL запрос для добавления нового отзыва в таблицу
    $sqlDeleteReview = "DELETE FROM `reviews` WHERE id=\"".(int)$_GET['id']."\"";

    if(!mysqli_query($connect, $sqlDeleteReview)) {
        echo "Ошибка при абдейте базы";
    }
    else
        header("Location: ./index.php");
