<?php

$tpl = file_get_contents('../view/templates/goodDescription.tpl');

$chairPictureName = getOne($connect,(int)$_GET['id'],'bigimages')["name"];

$thisGood = getOne($connect,(int)$_GET['id'],'chairs');
$chairTitle = $thisGood["title"];
$chairDesc = $thisGood["short"];
$chairPrice = $thisGood["price"];
$chairCare = $thisGood["care"];
$hotDeal = ($thisGood["hot"] == 1) ? 'block' : 'none';
$id = $thisGood["id"];

$pieces = explode("\n", $thisGood["size"]);
foreach ($pieces as $prop) {
    $chairSize .="<i class='properties'>$prop</i>";
}

mysqli_close($connect);

$patterns = array( '/{title}/', '/{name}/','/{short}/', '/{care}/', '/{size}/', '/{price}/', '/{displayOption}/', '/{thisGoodId}/' );
$replace = array( $chairTitle, $chairPictureName, $chairDesc, $chairCare, $chairSize, $chairPrice, $hotDeal, $id );
echo preg_replace( $patterns, $replace, $tpl );


