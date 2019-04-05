<?php include_once "../controllers/order.php"; ?>
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
        <div id="orderDetailes"></div>
        <div class="loginPage">
            <h2>Детали заказа</h2>
            <? echo "<h4>" . ($message ? $message : "") . "</h4>"; ?>
            <form method="post">
                <div>
                    <label for="delivery" class="">Способ доставки: </label>
                    <input type="radio" name="delivery" value="1" required>Самовывоз</option>
                    <input type="radio" name="delivery" value="0" required>Доставка</option>
                </div>
                <div>
                    <label for="inputName" class="">Имя: </label>
                    <input type="text" name="name" id="inputName" placeholder="Введите имя" required>
                </div>
                <div>
                    <label for="inputPhone" class="">Телефон: </label>
                    <input type="text" required name="phone" class="rowGoods nameFull" placeholder="Введите номер телефона">
                </div>
                <input type="submit" name="commitOrder" value="Заказать">
            </form>
        </div>
    </div>
    <? include "./footer.php"; ?>
</div>
</body>

</html>
<script>
    $(document).ready(function() {
        displayOrderDetailes();
    });
    function displayOrderDetailes() {
        $.ajax({
            type: "POST",
            url: "../controllers/orderDetailes.php",
            success: function(answer){
                document.getElementById("orderDetailes").innerHTML = answer;
            }
        });
    }

    function increaseGoodOrder(good) {
        // let good = $("#plus").attr("class");
        let count = $("#goodsCount"+good).text();
        count++;
        let str = "id="+good+"&count="+count;
        $.ajax({
            type: "POST",
            url: "../controllers/updateCart.php",
            data: str,
            success: function(answer){
                if (answer == 'true') {
                    displayOrderDetailes();
                }
                else
                    alert(answer);
            }
        });
    }
    function decreaseGoodOrder(good) {
        // let good = $("#plus").attr("class");
        let count = $("#goodsCount"+good).text();
        count--;
        let str = "id="+good+"&count="+count;
        $.ajax({
            type: "POST",
            url: "../controllers/updateCart.php",
            data: str,
            success: function(answer){
                if (answer == 'true') {
                    displayOrderDetailes();
                }
                else
                    alert(answer);
            }
        });
    }

</script>