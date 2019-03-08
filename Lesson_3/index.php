<?
	$title = "Домашнее задание №3";
	$currentDate = date("d-m-Y");
?>
<head>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
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
				<h2><a href="#">Решение домашнего задания к третьему уроку по PHP</a></h2>
			</div>
			<div class="body">
                <?
                $menu = [
                    "С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка." => "",
                    "С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:" => [
                        "0 – это ноль.",
                        "1 – нечетное число.",
                        "2 – четное число.",
                        "3 – нечетное число.",
                        "…",
                        "10 – четное число."
                    ],
                    "Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:" => [
                        "Московская область:",
                        "Москва, Зеленоград, Клин",
                        "Ленинградская область:",
                        "Санкт-Петербург, Всеволожск, Павловск, Кронштадт",
                        "Рязанская область … (названия городов можно найти на maps.yandex.ru)"
                    ],
                    "Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’)." => [
                        "Написать функцию транслитерации строк."
                    ],
                    "Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку." => "",
                    "В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать." => "",
                    "*Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно так:" => [
                        "for (…){ // здесь пусто}"
                    ],
                    "*Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К»." => "",
                    " *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах)." => ""
                ];
                echo "<ol>";
                foreach($menu as $menuItem => $subMenuItems) {
                    echo "<li>$menuItem";
                    if ($subMenuItems != "") {
                        echo "<ul>";
                        foreach ($subMenuItems as $item) {
                            echo "<li>$item</li>";
                        }
                        echo "</ul>";
                    }
                    echo "</li>";
                }
                echo "</ol>";
                ?>
			</div>
			<div class="x"></div>
		</div>
		
		<div class="tasks">
            <div class="col">
                <h3><a href="#">Задание №1</a></h3>
                <?
                $i = 0;
                while($i < 100) {
                    if($i % 3 == 0)
                        echo "$i<br>";
                    $i++;
                }
                ?>
            </div>
            <div class="col">
                <h3><a href="#">Задание №2</a></h3>
                <?
                $i = 0;
                do {
                    if ($i === 0)
                        echo "$i - это ноль<br>";
                    elseif ($i % 2 === 0)
                        echo "$i - четное число<br>";
                    else
                        echo "$i - нечетное число<br>";
                }while ($i++ < 10);

                ?>
            </div>
            <div class="col">
                <h3><a href="#">Задание №3</a></h3>
                <?
                $areas = [
                    "Московская область" => [
                        "Москва",
                        "Зеленоград",
                        "Клин"
                    ],
                    "Ленинградская область" => [
                        "Санкт-Петербург",
                        "Всеволожск",
                        "Павловск",
                        "Кронштадт"
                    ],
                    "Рязанская область" => [
                        "Рязань",
                        "Скопин",
                        "Ряжск",
                        "Касимов"
                    ],
                    "Нижегородская область" => [
                        "Нижний Новгород",
                        "Арзамас",
                        "Павлово",
                        "Выкса"
                    ]
                ];

                foreach($areas as $key => $value) {
                    echo "<strong>$key:</strong><br/>";
                    foreach ($value as $city) {
                        echo "$city";
                        echo ($city === $value[count($value) - 1]) ? " " : ", ";
                    }
                    echo "<br/><br/>";
                }
                ?>
            </div>
            <div class="col">
                <h3><a href="#">Задание №4</a></h3>
                <?
                function transliteration($str) {
                    $dictionary = [
                        'а' => 'a',
                        'б' => 'b',
                        'в' => 'v',
                        'г' => 'g',
                        'д' => 'd',
                        'е' => 'e',
                        'ё' => 'yo',
                        'ж' => 'zh',
                        'з' => 'z',
                        'и' => 'i',
                        'й' => 'y',
                        'к' => 'k',
                        'л' => 'l',
                        'м' => 'm',
                        'н' => 'n',
                        'о' => 'o',
                        'п' => 'p',
                        'р' => 'r',
                        'с' => 's',
                        'т' => 't',
                        'у' => 'u',
                        'ф' => 'f',
                        'х' => 'h',
                        'ц' => 'ts',
                        'ч' => 'ch',
                        'ш' => 'sh',
                        'ъ' => '\'',
                        'ь' => '',
                        'щ' => 'sch',
                        'ы' => 'yi',
                        'э' => 'e',
                        'ю' => 'yu',
                        'я' => 'ya'
                    ];
                    $newString = "";
                    $arr = preg_split('//u',$str,-1,PREG_SPLIT_NO_EMPTY);
                    foreach ($arr as $ch) {
                        $isUpper = false;
                        if (mb_strtoupper($ch, 'UTF-8') === $ch) {
                            $isUpper = true;
                            $ch = mb_strtolower($ch, 'UTF-8');
                        }
                        if (array_key_exists($ch, $dictionary)) {
                            if($isUpper)
                                $newString .= mb_strtoupper($dictionary["$ch"], 'UTF-8');
                            else
                                $newString.=$dictionary["$ch"];
                        }
                        else
                            $newString.=$ch;
                    }
                    return $newString;
                }
                $phrase = "Привет как дела, Мир!";
                echo $phrase."<br><br>".transliteration($phrase);
                ?>
            </div>
            <div class="col">
                <h3><a href="#">Задание №5</a></h3>
                <?
                    function replaceSpaces($str) {
                        return str_replace(" ","_",$str);
                    }
                    echo $phrase."<br><br>".replaceSpaces(transliteration($phrase));
                ?>
            </div>
            <div class="col">
                <h3><a href="#">Задание №6</a></h3>
                <?
                    echo "Это задание сделано выше в виде списка заданий"
                ?>
            </div>
            <div class="col">
                <h3><a href="#">Задание №7</a></h3>
                <?
                   for ($i = 0; $i < 10; print $i++."<br>"){}
                ?>
            </div>
            <div class="col">
                <h3><a href="#">Задание №8</a></h3>
                <?
                    foreach($areas as $key => $value) {
                        echo "<strong>$key:</strong><br/>";
                        foreach ($value as $city) {
                            $firstChar = mb_substr($city,0,1,"UTF-8");
                            if ($firstChar === "К") {
                                echo "$city";
                                echo ($city === $value[count($value) - 1]) ? " " : ", ";
                            }
                        }
                        echo "<br/><br/>";
                    }
                ?>
            </div>
            <div class="col">
                <h3><a href="#">Задание №9</a></h3>
                <?
                    function transliterationAndReplacing($str) {
                        return replaceSpaces(transliteration($str));
                    }
                    echo $phrase."<br><br>".transliterationAndReplacing($phrase);
                ?>
            </div>
        </div>

		
		<div id="footer">
			<p>Copyright &copy;<?echo date("Y")?> <em>minimalistica</em> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
		</div>	
	</div>
</body>
</html>