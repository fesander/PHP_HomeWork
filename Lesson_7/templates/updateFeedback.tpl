<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{title}</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <div class="container">
        <form class="sendReviews" action="../updateReview.php" method="post">
            <input type="text" name="name" placeholder="Введите свое имя" value="{name}">
            <textarea name="review" id="review" cols="20" rows="10" placeholder="Текст отзыва о магазине">{text}</textarea>
            <span>Выберите правильный знак операции: {arg1}</span>
            <select name="operation" id="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <span>{arg2} = {result}</span>
            <input type="hidden" name="hid" value="{expectedOperation}">
            <input type="hidden" name="reviewId" value="{reviewId}">
            <input type="submit" value="Опубликовать отзыв">
        </form>
    </div>
</body>
</html>