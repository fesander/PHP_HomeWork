<?
	$title = "Домашнее задание №2";
	$currentDate = date("d-m-Y");
?>
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
<!--	<link rel="stylesheet" href="css/main.css" type="text/css" />-->
	<?
		echo "<title>$title</title>";	
	?>
</head>
<body>
	<div id="content">
		<?
			echo "<h1>$title ($currentDate)</h1>";	
		?>
		<ul id="menu">
			<li><a href="#">home</a></li>
			<li><a href="#">archive</a></li>
			<li><a href="#">contact</a></li>
		</ul>
	
		<div class="post">
			<div class="details">
				<h2><a href="#">Решение домашнего задания ко второму уроку по PHP</a></h2>
			</div>
			<div class="body">
				<ol>
                    <li>Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
                        <ul>
                            <li>если $a и $b положительные, вывести их разность;</li>
                            <li>если $а и $b отрицательные, вывести их произведение;</li>
                            <li>если $а и $b разных знаков, вывести их сумму;</li>
                        </ul>
                        ноль можно считать положительным числом.
                    </li>
                    <li>Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.</li>
                    <li>Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.</li>
                    <li>Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).</li>
                    <li>Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.</li>
                    <li>*С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.</li>
                    <li>*Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
                        <ul>
                            <li>22 часа 15 минут</li>
                            <li>21 час 43 минуты</li>
                        </ul>
                    </li>
                </ol>
			</div>
			<div class="x"></div>
		</div>
		
		<div class="tasks">
            <div class="col">
                <h3><a href="#">Задание №1</a></h3>
                <?
                $x = rand(-100,100);
                $y = rand(-100,100);
                echo "X = $x<br>Y = $y<br>";
                if ($x >= 0 && $y >= 0)
                    echo "Вычитание: $x - $y = ".($x-$y);
                elseif ($x < 0 && $y < 0)
                    echo "Умножение: $x * $y = ".($x*$y);
                else
                    echo "Сложение: $x + $y = ".($x+$y);
                ?>
            </div>
            <div class="col">
                <h3><a href="#">Задание №2</a></h3>
                <?
                $a = rand(0,15);
                echo "A = $a<br>";
                switch ($a) {
                    case 0:
                        echo "0<br>";
                    case 1:
                        echo "1<br>";
                    case 2:
                        echo "2<br>";
                    case 3:
                        echo "3<br>";
                    case 4:
                        echo "4<br>";
                    case 5:
                        echo "5<br>";
                    case 6:
                        echo "6<br>";
                    case 7:
                        echo "7<br>";
                    case 8:
                        echo "8<br>";
                    case 9:
                        echo "9<br>";
                    case 10:
                        echo "10<br>";
                    case 11:
                        echo "11<br>";
                    case 12:
                        echo "12<br>";
                    case 13:
                        echo "13<br>";
                    case 14:
                        echo "14<br>";
                    case 15:
                        echo "15<br>";
                }
                ?>
            </div>
            <div class="col">
                <h3><a href="#">Задание №3</a></h3>
                <?
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
                        return $x / $y;
                    }
                    $x = rand(-100,100);
                    $y = rand(-100,100);
                    echo "X = $x<br>Y = $y<br>";
                    echo "Сложение: $x + $y = ".add($x,$y)."<br>";
                    echo "Вычитание: $x - $y = ".sub($x,$y)."<br>";
                    echo "Умножение: $x * $y = ".mul($x,$y)."<br>";
                    echo "Деление: $x / $y = ".div($x,$y)."<br>";
                ?>
            </div>
            <div class="col">
                <h3><a href="#">Задание №4</a></h3>
                <?
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
                    $x = rand(-100,100);
                    $y = rand(-100,100);
                    $operation = getOperation(rand(0,3));
                    echo "X = $x<br>Y = $y<br>Operation = \"$operation\"<br>";
                    echo "$x $operation $y = ".mathOperation($x, $y, $operation);
                ?>
            </div>
            <div class="col">
                <h3><a href="#">Задание №5</a></h3>
                <?
                echo "Вывожу текущий год в футере";
                ?>
            </div>
            <div class="col">
                <h3><a href="#">Задание №6</a></h3>
                <?
                    function power($val, $pow) {
                        if ($pow <= 0 && $val === 0)
                            return "0-ая или отрицательная степень не может быть определена для числа 0";
                        if ($pow === 0)
                            return 1;
                        if ($pow < -1)
                            return power($val,$pow+1)*(1/$val);
                        elseif ($pow === -1)
                            return 1/$val;
                        elseif ($pow > 1)
                            return power($val,$pow-1)*$val;
                        else
                            return $val;
                    }
                    echo "Тестирование:<br>";
                    echo "0^-5 = ".power(0, -5)."<br>"; // 0-ая или отрицательная степень не может быть определена для числа 0
                    echo "1^0 = ".power(1, 0)."<br>"; // 1
                    echo "-1^0 = ".power(-1, 0)."<br>"; // 1
                    echo "5^2 = ".power(5, 2)."<br>"; // 25
                    echo "2^-2 = ".power(2, -2)."<br>"; // 0.25
                    echo "-5^3 = ".power(-5, 3)."<br>"; // -125
                    echo "-2^-2 = ".power(2, -2)."<br><br>"; // 0.25

                    echo "Случайные числа:<br>";
                    $x = rand(-10,10);
                    $p = rand(-5,5);
                    echo "X = $x<br>P = $p<br>";
                    echo "$x^$p = ".power($x, $p);
                ?>
            </div>
            <div class="col">
                <h3><a href="#">Задание №7</a></h3>
                <?
                    $h = date('H');
                    $m = date('i');
                    $s = date('s');
                    echo "Текущее время:<br>";
                    // Вычисление часов
                    if($h%10 === 1 && $h != 11)
                        echo "$h час ";
                    elseif ($h%10 === 2 && $h != 12 ||
                            $h%10 === 3 && $h != 13 ||
                            $h%10 === 3 && $h != 13 ||
                            $h%10 === 4 && $h != 14)
                        echo "$h часа ";
                    else
                        echo "$h часов ";

                    // Вычисление минут
                    if($m%10 === 1 && $m != 11)
                        echo "$m минута ";
                    elseif ($m%10 === 2 && $m != 12 ||
                            $m%10 === 3 && $m != 13 ||
                            $m%10 === 3 && $m != 13 ||
                            $m%10 === 4 && $m != 14)
                        echo "$m минуты ";
                    else
                        echo "$m минут ";

                    // Вычисление секунд
                    if($s%10 === 1 && $s != 11)
                        echo "$s секунда";
                    elseif ($s%10 === 2 && $s != 12 ||
                            $s%10 === 3 && $s != 13 ||
                            $s%10 === 3 && $s != 13 ||
                            $s%10 === 4 && $s != 14)
                        echo "$s секунды";
                    else
                        echo "$s секунд";
                ?>
            </div>
        </div>

		
		<div id="footer">
			<p>Copyright &copy;<?echo date("Y")?> <em>minimalistica</em> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
		</div>	
	</div>
</body>
</html>