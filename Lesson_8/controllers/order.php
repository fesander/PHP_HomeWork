<?php

include "../model/model.php";

if (isset($_POST[commitOrder])) {
    $tableEmpty = isTableEmpty($connect,'cart');
    $orderId = date_timestamp_get(date_create());
    $goodsCount = 0;
    $goods = getByColumn($connect, 'userId', $_SESSION[id], 'cart');
    foreach($goods as $good) {
        $sqlUpdateOrder = "INSERT INTO `userorders` (`id`, `order_id`, `good`, `count`,`userId`) 
                          VALUES (NULL, '" . $orderId . "','" . $good['goods'] . "','" . $good['count'] . "','" .
            $good['userId'] . "');";
        $goodsCount++;
        if(mysqli_query($connect, $sqlUpdateOrder)) {
            $sqlClearCart = "DELETE FROM `cart` WHERE `cart`.`id` = " . $good['id'];
            mysqli_query($connect, $sqlClearCart);
        }
    }
    if (!$tableEmpty    ) {
        $sqlUpdateAllOrders = "INSERT INTO `all_orders` (`id`, `order_id`, `goods_number`, `delivery`, `user_name`, `phone`) 
                          VALUES (NULL, '" . $orderId . "','" . $goodsCount . "','" . $_POST['delivery'] . "','" . $_POST['name'] . "','" . $_POST['phone'] . "');";

        if(!mysqli_query($connect, $sqlUpdateAllOrders)) {
            $message = "Ошибка в абдете заказа:\n" . $sqlUpdateOrder;
        }
        else {
            $message = "Ваш заказ №" . $orderId ." в обработке. С вами свяжутся в ближайщее время";
        }
    }
}

