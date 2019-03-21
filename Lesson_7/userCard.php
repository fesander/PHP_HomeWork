<?
session_start();

$user = $_GET['user'];
include "config.php";

$query = "select * from users where login='$user'";

$res = mysqli_query($connect,$query);
$data = mysqli_fetch_assoc($res);
$userName = $data['name'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
<div id="content">
    <h1>Личный кабинет</h1>
    <div class="container">
        <img src="imgUsers/<?echo $user?>.jpg" alt="фотография">
        <div id="box_text">
            <p>Добрый день <b><?echo $userName?></b>.
            <p>Рады видеть вас в нашем интернет магазине</p>
            <a href="../index.php" class="to_main_page"><-- Вернуться на главную</a>
        </div>
    </div>
</div>
<div id="footer">Copyright © 2016 <a href="https://geekbrains.ru/" target="_blank">GeekBrains</a></div>
</body>

</html>