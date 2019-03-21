<?
include "config.php";

$tpl = file_get_contents('templates/showCart.tpl');

// Находим втаблице товар по переданному id
$sqlImage = "SELECT * FROM cart";
$res = mysqli_query($connect, $sqlImage);
$sum = 0;

while($data = mysqli_fetch_assoc($res)) {
    $findGood = "select * from chairs where id='".$data['goods']."'";
    $good = mysqli_fetch_assoc(mysqli_query($connect, $findGood));
    $goods.="<div>";
    $goods.="<span class='cartMargins'>".$data['id'];
    $goods.="</span>";
    $goods.="<strong class='cartMargins'>".$good['title'];
    $goods.="</strong>";
    $goods.="<span class='cartMargins'>".$good['price'];
    $goods.="</span>";
    $goods.="</div>";
    $sum += (double)$good['price'];
}
$goods.="<div>";
$goods.="<strong class='cartMargins'>Всего</strong>";
$goods.="<span class='cartMargins'>".$sum;
$goods.="</span>";
$goods.="</div>";

mysqli_close($connect);

$patterns = array( '/{cartGoods}/');
$replace = array( $goods );
echo preg_replace( $patterns, $replace, $tpl );