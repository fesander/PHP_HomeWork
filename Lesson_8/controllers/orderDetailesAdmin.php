<?php
include "../model/model.php";
$tpl = file_get_contents('../view/templates/orderDetailes.tpl');


$goodItems = "";
$number = 1;
$totalSum = 0;


$goods = getByColumn($connect, 'order_id', $_POST[id], 'userorders');
foreach($goods as $good) {
    $thisGood = getOne($connect,$good['good'],'chairs');
    $thisUser = getOne($connect,$good['userId'],'users');
    $thisPrice = $thisGood['price'] * $good['count'];
    $goodItems .= "<tr>";
    $goodItems .="<td>".$number++."</td>";
    $goodItems .="<td>".$thisGood['title']."</td>";
    $goodItems .="<td>";
    $goodItems .="<span id='goodsCount" . $good['id'] . "'>".$good['count']."</span>";
    $goodItems .="</td>";
    $goodItems .="<td>".$thisPrice."р.</td>";
    $goodItems .="</tr>";
    $totalSum += $thisPrice;
}

$patterns = array( '/{goodItems}/', '/{totalSum}/', '/{user}/');
$replace = array( $goodItems, $totalSum, $thisUser['login'] );
echo preg_replace( $patterns, $replace, $tpl );