<?
    include "config.php";

    if ($_POST['hid'] === $_POST['operation']) {
        echo $_POST['reviewId'];
        // SQL запрос для добавления нового отзыва в таблицу
        $sqlPublishReview = "INSERT INTO `reviews` (`id`, `reviewer`, `review`) VALUES (NULL, '" . $_POST['name'] . "', '" . $_POST['review'] . "');";

        if(!mysqli_query($connect, $sqlPublishReview)) {
            echo "Ошибка при абдейте базы";
        }
        else
           header("Location: ./index.php");
    }
    else {
        echo "Ошибка при добавлении отзыва, Capture решена неверно<br>";
        echo "Ожидаемая операция: " . $_POST['hid'] . "<br>";
        echo "Ответ пользователя: " . $_POST['operation'] . "<br>";
        echo "<a href=\"index.php\" class=\"to_main_page\"><-- Вернуться на главную</a>";
    }