<?
include "../model/model.php";
    // SQL запрос для добавления нового отзыва в таблицу

    if (isset($_SESSION[login]) && isset($_SESSION[pass])) {
        $thisId = (int)$_POST['id'];
        $query = sprintf("SELECT * FROM `cart` where goods = %d  and userId = %d", (int)$thisId, $_SESSION[id]);
        $result = mysqli_query($connect, $query);
        $res = mysqli_fetch_assoc($result);
        if($res != NULL) {
            $mysqli_query = sprintf("UPDATE `cart` SET `count` = %d WHERE `cart`.`goods` = %d and `cart`.`userId` = %d", ++$res['count'], (int)$thisId, $_SESSION[id]);
            if(!mysqli_query($connect, $mysqli_query)) {
                echo "Ошибка при абдейте базы";
            }
            else
                echo "true";
        }
        else {
            $sqlPublishReview = "INSERT INTO `cart` (`id`, `goods`, `userId`) VALUES (NULL, '" . $_POST['id'] . "','" . $_SESSION[id] . "');";
            if(!mysqli_query($connect, $sqlPublishReview)) {
                echo "Ошибка при абдейте базы";
            }
            else
                echo "true";
        }
    }
    else
        echo "Зарегистрируйтесь или залогиньтесь";