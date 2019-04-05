<?php
include "../model/model.php";
$tpl = file_get_contents('../view/templates/orderDetailes.tpl');


$goodItems = "";
$number = 1;
$totalSum = 0;
if (isset($_SESSION[login]) && isset($_SESSION[pass])) {

    $goods = getByColumn($connect, 'userId', $_SESSION[id], 'cart');
    foreach($goods as $good) {
        $thisGood = getOne($connect,$good['goods'],'chairs');
        $thisPrice = $thisGood['price'] * $good['count'];
        $goodItems .= "<tr>";
        $goodItems .="<td>".$number++."</td>";
        $goodItems .="<td>".$thisGood['title']."</td>";
        $goodItems .="<td class='goodCount'><div class='minus' onclick=\"decreaseGoodOrder(" . $good['id'] . ")\">-</div>";
        $goodItems .="<span id='goodsCount" . $good['id'] . "'>".$good['count']."</span>";
        $goodItems .="<div class='plus' onclick=\"increaseGoodOrder(" . $good['id'] . ")\">+</div></td>";
        $goodItems .="<td>".$thisPrice."р.</td>";
        $goodItems .="</tr>";
        $totalSum += $thisPrice;
    }
}

$patterns = array( '/{goodItems}/', '/{totalSum}/', '/{user}/');
$replace = array( $goodItems, $totalSum, $_SESSION[login] );
echo preg_replace( $patterns, $replace, $tpl );