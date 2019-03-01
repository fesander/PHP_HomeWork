<?
	$title = "minimalistica";
	$currentDate = date("d-m-Y");
?>
<head>
	<link rel="stylesheet" href="css/main.css" type="text/css" />
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
				<h2><a href="#">Nunc commodo euismod massa quis vestibulum</a></h2>
				<p class="info">posted 3 hours ago in <a href="#">general</a></p>
			
			</div>
			<div class="body">
				<p>Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. Proin mi nibh, dignissim a pellentesque at, ultricies sit amet sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lorem eu libero laoreet facilisis. Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium erat neque vitae augue. Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>
			</div>
			<div class="x"></div>
		</div>
		
		<div class="col">
			<h3><a href="#">Задание №3</a></h3>
			<?
				$a = 5;
			    $b = '05';
			    var_dump($a == $b);         // true?
				echo " - True, потому что \"==\" это не строгое стравнение и 05 преобразовывается к числу 5<br><br>";
			    var_dump((int)'012345');     // Почему 12345?
				echo " - 12345, потому что строка явно приводится к числу, где 0 в начале отбрасывается<br><br>";
			    var_dump((float)123.0 === (int)123.0); // Почему false?
				echo " - False, потому что \"===\" это строгое стравнение и чтобы в итоге получить true оба числи должны быть еще и одного типа<br><br>";
			    var_dump((int)0 === (int)'hello, world'); // Почему true?
				echo " - True, потому что преобразование строки в число дает на выходе 0. Если ы у нас в начале строки было какое-то число, например \"45 Hello\", то при преобразовании к int-у мы бы получили 45. А так, получается, что мы сравниваем 0 с 0 и получаем true<br>";
			?>
			<p>&not; <a href="#">read more</a></p>
		</div>
		<div class="col">
			<h3><a href="#">Задание №5</a></h3>
			<?
				$a = 5;
			    $b = 10;
			    echo "a = $a<br>b = $b";
			    echo "<br>Меняем переменные местами, не используя дополнительную переменную<br>";
			    $a += $b;
			    $b = $a - $b;
			    $a -= $b; 
			    echo "a = $a<br>b = $b";
			?>
			<p>&not; <a href="#">read more</a></p>
		</div>
		<div class="col last">
			<h3><a href="#">Задание №2<br>Примеры из методички </a></h3>
            <?
                $int10 = 42;
                $int2 = 0b101010;
                $int8 = 052;
                $int16 = 0x2A;
                echo "Десятеричная система $int10 <br>";
                echo "Двоичная система $int2 <br>";
                echo "Восьмеричная система $int8 <br>";
                echo "Шестнадцатеричная система $int16 <br><br><hr><br>";

                $precise1 = 1.5;
                $precise2 = 1.5e4;
                $precise3 = 6E-8;
                echo "$precise1 | $precise2 | $precise3 <br><br><hr><br>";

                $a = 'Hello,';
                $b = 'world';
                $c = $a . $b;
                echo "$c<br><br><hr><br>";

                $a = 4;
                $b = 5;
                echo $a + $b . '<br>'; // сложение
                echo $a * $b . '<br>'; // умножение
                echo $a - $b . '<br>'; // вычитание
                echo $a / $b . '<br>'; // деление
                echo $a % $b . '<br><br><hr><br>'; // остаток от деления

                // Следующий пример из методички на работает с возведением в степень,
                // да и вообще я не нешел отдельнуд операцию для этого
                // echo $a ** $b . '<br><hr><br>'; // возведение в степень

                $a = 4;
                $b = 5;
                $a += $b;
                echo 'a = ' . $a. '<br>';
                $a = 0;
                echo $a++ . '<br>'; // Постинкремент
                echo ++$a . '<br>'; // Преинкремент
                echo $a-- . '<br>'; // Постдекремент
                echo --$a . '<br><br><hr><br>'; // Предекремент

                $a = 4;
                $b = 5;
                var_dump($a == $b) . '<br>'; // Сравнение по значению
                var_dump($a === $b) . '<br>'; // Сравнение по значению и типу
                var_dump($a > $b) . '<br>'; // Больше
                var_dump($a < $b) . '<br>'; // Меньше
                var_dump($a <> $b) . '<br>'; // Не равно
                var_dump($a != $b) . '<br>'; // Не равно
                var_dump($a !== $b) . '<br>'; // Не равно без приведения типов
                var_dump($a <= $b) . '<br>'; // Меньше или равно
                var_dump($a >= $b) . '<br>'; // Больше или равно

            ?>
            <p>&not; <a href="#">read more</a></p>
		</div>
		
		<div id="footer">
			<p>Copyright &copy; <em>minimalistica</em> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
		</div>	
	</div>
</body>
</html>