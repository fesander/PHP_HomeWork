<?
    include "config.php";

    // SQL запрос для добавления нового отзыва в таблицу
    $sqlPublishReview = "INSERT INTO `cart` (`id`, `goods`) VALUES (NULL, '" . $_POST['id'] . "');";

    if(!mysqli_query($connect, $sqlPublishReview)) {
        echo "Ошибка при абдейте базы";
    }
    else
       echo "true";

