
<script>
    function addToCart() {
        let good = $("#goodsId").attr("title");
        let str = "id="+good;
        $.ajax({
            type: "POST",
            url: "../controllers/addGood.php",
            data: str,
            success: function(answer){
                if (answer == 'true') {
                    alert("Добавлено в корзину");
                }
                else
                    alert(answer);
            }
        });
    }
</script>
<div class="pictures">
    <div class="chair">
        <a href="./images/big/{name}" target="_blank" style="background-image: url('./images/big/{name}')";></a>
    </div>
</div>
<div class="text">
    <h3 id="goodsId" title="{thisGoodId}">{title}</h3>
    <h4 style="display: {displayOption}">Hot Deal</h4>
    <h2>{price} р.</h2>
    <a class="order-us" onclick="addToCart()">Купить</a>
    <p>{short}</p>
    <h4>Инструкция по уходу:</h4>
    <p class="chair-description">{care}</p>
    <h4>Размеры товара:</h4>
    <p class="chair-description">{size}</p>
</div>