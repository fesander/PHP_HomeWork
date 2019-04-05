<?php
include_once "../model/model.php";
include "../controllers/product.php";
?>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div class="container-head">
    <header class="header">
        <a href="index.php">
            <img src="images/layout/logo.png" alt="logo" class="header__logo">
        </a>
        <nav class="header__menu">
            <ul>
                <li><a class="active-menu" href="index.php">HOME</a></li>
                <li><a href="#">PRODUCTS</a></li>

                <?php
                if (isset($_SESSION[login]) && isset($_SESSION[pass])) {
                    echo "<li><a href='#'>Кабинет</a></li>";
                    echo "<li><a href='  ./login.php?action=logout'>Выйти ($_SESSION[login])</a></li>";

                } else {
                    echo "<li><a href='  ./login.php'>Войти</a></li>";
                    echo "<li><a href='  ./checkIn.php'>Регистрация</a></li>";
                }
                if (isset($_SESSION[login]) && isset($_SESSION[pass]) && $_SESSION[login] == 'admin') {
                    ?>
                    <li><a href='#'>Админка</a></li>
                    <li><a href='  /view/orderManager.php'>Управление заказами</a></li>
                <? } ?>
            </ul>
        </nav>
    </header>
    <h4>TRENDING</h4>
    <h2>Fishnet Chair</h2>
    <p>Seat and back with upholstery made of&nbsp;cold cure foam. Steel frame, available in&nbsp;matt
        powder-coated black</p>
    <a class="order-us" id="displayCart">Корзина</a>
    <div class="cart"></div>
</div>
<script>
    $('#displayCart').on('click', function (event) {
        displayCart();
    });

    /**
     * Отрисовка корзины
     */
    function displayCart() {
        $.ajax({
            type: "POST",
            url: "../controllers/cart.php",
            success: function(answer){
                document.getElementsByClassName("cart")[0].innerHTML = answer;
                $(".cart").addClass("displayMe");
            }
        });
        // Закрытие корзины при клике вне корзины.
        $(document).mouseup(function (e){ // событие клика по веб-документу
            let cart = $(".cart"); // тут находим элемент
            if (!cart.is(e.target) // если клик был не по нашему блоку
                && cart.has(e.target).length === 0) { // и не по его дочерним элементам
                cart.removeClass("displayMe")
            }
        });
    }

    function increaseGood(good) {
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
                    displayCart();
                }
                else
                    alert(answer);
            }
        });
    }
    function decreaseGood(good) {
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
                    displayCart();
                }
                else
                    alert(answer);
            }
        });
    }
</script>