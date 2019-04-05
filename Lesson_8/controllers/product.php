<?php
//include "../model/model.php";

$goods = getAll($connect, 'bigimages', "views");

$galleryItems = "";
foreach($goods as $good) {
    $thisGood = getOne($connect,$good['id'],'chairs');
    $productClass = "style=\"background-image: url('../view/images/small/".$good['name']."');\"";
    $galleryItems.="<div class='products-all__product' ".$productClass.">";
    $galleryItems.="<div class='products-all__product-active'>";
    $galleryItems.="<a href=\"./product-details.php?id=".$good['id']."\">";
    $galleryItems.="<div class='arrow'></div>";
    $galleryItems.="<h4>".$thisGood['title']."</h4>";
    $galleryItems.="<p>".$thisGood['short']."</p>";
    $galleryItems.="</a>";
    $galleryItems.="</div>";
    $galleryItems.="</div>";
}