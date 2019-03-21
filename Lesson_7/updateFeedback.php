<?
    include "config.php";

    function add($x, $y) {
        return $x + $y;
    }
    function sub($x, $y) {
        return $x - $y;
    }
    function mul($x, $y) {
        return $x * $y;
    }
    function div($x, $y) {
        if ( $y != 0)
            return $x / $y;
        else
            return "Деление на 0";
    }

    function mathOperation($arg1, $arg2, $operation) {
        switch ($operation) {
            case "+":
                return add($arg1,$arg2);
            case "-":
                return sub($arg1,$arg2);
            case "*":
                return mul($arg1,$arg2);
            case "/":
                return div($arg1,$arg2);
            default:
                return "$operation - Неверная операция";
        }
    }

    function  getOperation($o) {
        switch ($o) {
            case 0:
                return "+";
            case 1:
                return "-";
            case 2:
                return "*";
            case 3:
                return "/";
        }
    }

    $tpl = file_get_contents('templates/updateFeedback.tpl');

    // Находим втаблице товар по переданному id
    $sqlFeedback = "SELECT * FROM `reviews` WHERE id=\"".(int)$_GET['id']."\"";
    $res = mysqli_fetch_assoc(mysqli_query($connect, $sqlFeedback));


    $x = rand(0,10);
    $y = rand(0,10);
    $operation = getOperation(rand(0,3));

    $reviewId = $res['id'];
    $reviewer = $res['reviewer'];
    $text = $res['review'];

    $patterns = array( '/{reviewId}/', '/{name}/', '/{text}/', '/{arg1}/', '/{arg2}/', '/{result}/','/{expectedOperation}/' );
    $replace = array( $reviewId, $reviewer, $text, $x, $y, mathOperation($x, $y, $operation), $operation );
    echo preg_replace( $patterns, $replace, $tpl );
    echo $reviewId;