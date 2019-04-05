<?php include_once "../controllers/User.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Interior</title>
    <link rel="stylesheet" href="style/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
            integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
            crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <div class="not-footer">
        <? include "./header.php"; ?>
        <div class="loginPage">
            <?
                echo "<h1>Вход на сайт</h1>";
                echo "<h4>" . ($message ? $message : "") . "</h4>"; ?>
                <form method="post">
                    <div>
                        <p>Логин: </p>
                        <input type="text" name="login" maxlength="30" placeholder="Введите Логин" autofocus required>
                    </div>
                    <div>
                        <p>Пароль: </p>
                        <input type="password" minlength="2" name="pass" placeholder="Введите Пароль" required>
                    </div>
                    <input type="submit" name="enter" value="Войти">
                </form>
        </div>
    </div>
    <? include "./footer.php"; ?>
</div>
</body>

</html>
