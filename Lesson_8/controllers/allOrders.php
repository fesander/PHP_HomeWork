<?php
include "../model/model.php";
$tpl = file_get_contents('../view/templates/allOrders.tpl');


$orderItems = "";


$orders = getAll($connect, 'all_orders');
foreach($orders as $order) {
    $thisOrder = getByColumn($connect, 'order_id', $orders['order_id'],'userorders');
    $delivery = ($order['delivery'] == 1) ? "Самовывоз" : "Доставка";
    $orderItems .= "<tr>";
    $orderItems .="<td>" . $order['order_id'] . "</td>";
    $orderItems .="<td>" . $order['goods_number'] . "</td>";
    $orderItems .="<td>" . $order['user_name'] . "</td>";
    $orderItems .="<td>" . $order['phone'] . "</td>";
    $orderItems .="<td>" . $delivery . "</td>";
    $orderItems .="<td>";
    $orderItems .="<div class='order-us' onclick=\"displayOneOrder(" . $order['order_id'] . ")\">Детали</div>";
    $orderItems .="</td>";
    $orderItems .="<td>";
    $orderItems .="<div class='order-us closeOrder' onclick=\"closeOrder(" . $order['order_id'] . ")\">X</div>";
    $orderItems .="</td>";
}

$patterns = array( '/{orderItems}/');
$replace = array( $orderItems );
echo preg_replace( $patterns, $replace, $tpl );