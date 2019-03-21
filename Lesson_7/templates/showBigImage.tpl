<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{title}</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="jquery.js"></script>
</head>
<script>
    function addToCart() {
        let good = $("#goodsId").val();
        let str = "id="+good;
        $.ajax({
            type: "POST",
            url: "addGood.php",
            data: str,
            success: function(answer){
                alert (answer);
                if (answer == 'true') {
                    alert("Добавлено в корзину");
                }
            }
        });
    }
</script>
<body>
    <div class="container">
        <div class="showPhoto">
            {bigImage}
        </div>

        <!--Блок с описанием товара и корзиной-->
        <div class="text">
            <div class="description">
                <input type="hidden" name="hid" id="goodsId" value="{id}">
                <h3 class="name">{name}</h3>
                <p class="chair-description">{short}</p>
                <p class="views_number">Просмотры: {views}</p>
                <a class="cost" onclick="addToCart()">{price} р.</a>
                <h4>Инструкция по уходу:</h4>
                <p class="chair-description">{care}</p>
                <h4>Размеры товара:</h4>
                <p class="chair-description">{size}</p>
                <a href="../index.php" class="to_main_page"><-- Вернуться на главную</a>
            </div>
        </div>
    </div>
</body>
</html>