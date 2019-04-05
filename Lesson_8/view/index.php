<? include "./header.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Interior</title>
    <link rel="stylesheet" href="style/style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
            integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
            crossorigin="anonymous"></script>
</head>

<body>
<div class="container">
    <div class="not-footer">
        <!-- ########################################### -->
        <div class="container-products">
            <div class="products-explore">
                <h2>Trending Products</h2>
                <div class="explore">
                    <a href="#">Explore all
                        <img src="images/layout/arrow.png" alt="arrow"></a>
                </div>
            </div>
            <div class="products-all">
                <?echo $galleryItems;?>
            </div>
        </div>
        <div class="find-fellow">
            <h4>mobile app</h4>
            <h2>Find. Follow. Favorite.</h2>
            <p>Save your favorites and share your style.</p>
            <a class="appStore" href="#">
                <img src="images/layout/app-store.png" alt="app-stope">
            </a>
            <a class="GoodlePlay" href="#">
                <img src="images/layout/google-play.png" alt="google-play">
            </a>
        </div>
    </div>
    <? include "./footer.php"; ?>
</div>
</body>

</html>
