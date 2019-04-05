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
        <div class="orderManager">
            <h1>Управление заказами пользователей</h1>
            <div id="ordersDetailes"></div>
            <div class="thisOrder"></div>
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
            url: "../controllers/allOrders.php",
            success: function(answer){
                document.getElementById("ordersDetailes").innerHTML = answer;
            }
        });
    }

    function displayOneOrder(order) {
        let str = "id="+order;
        $.ajax({
            type: "POST",
            url: "../controllers/orderDetailesAdmin.php",
            data: str,
            success: function(answer){
                document.getElementsByClassName("thisOrder")[0].innerHTML = answer;
                $(".thisOrder").addClass("displayMe");
            }
        });
        // Закрытие корзины при клике вне корзины.
        $(document).mouseup(function (e){ // событие клика по веб-документу
            let cart = $(".thisOrder"); // тут находим элемент
            if (!cart.is(e.target) // если клик был не по нашему блоку
                && cart.has(e.target).length === 0) { // и не по его дочерним элементам
                cart.removeClass("displayMe")
            }
        });
    }

    function closeOrder(order) {
        let str = "id="+order;
        $.ajax({
            type: "POST",
            url: "../controllers/closeOrder.php",
            data: str,
            success: function(){
                displayOrderDetailes();
            }
        });
    }
</script>