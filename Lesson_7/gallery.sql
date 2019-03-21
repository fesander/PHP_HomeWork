-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Мар 22 2019 г., 02:02
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bigimages`
--

CREATE TABLE `bigimages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `size` double NOT NULL,
  `name` text NOT NULL,
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bigimages`
--

INSERT INTO `bigimages` (`id`, `title`, `size`, `name`, `views`) VALUES
(0, 'Стефан', 21588, 'chair_1.jpg', 6),
(1, 'Ингольф', 30836, 'chair_2.jpg', 2),
(2, 'Терье', 28474, 'chair_3.jpg', 5),
(3, 'Каустби', 6958, 'chair_4.jpg', 13),
(4, 'Хенриксдаль', 7846, 'chair_5.jpg', 22);

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `goods` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `goods`) VALUES
(1, '4'),
(3, '4'),
(5, '2'),
(7, '0'),
(9, '3');

-- --------------------------------------------------------

--
-- Структура таблицы `chairs`
--

CREATE TABLE `chairs` (
  `id_chairs` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `short` text NOT NULL,
  `care` text NOT NULL,
  `size` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chairs`
--

INSERT INTO `chairs` (`id_chairs`, `title`, `price`, `short`, `care`, `size`, `id`) VALUES
(0, 'Стефан', 1699, 'Массив дерева – износостойкий натуральный материал.\r\n', 'Протирать тканью, смоченной мягким моющим средством.\r\nВытирать чистой сухой тканью.', 'Протестировано для: 110 кг\r\nШирина: 42 см\r\nГлубина: 49 см\r\nВысота: 90 см\r\nШирина сиденья: 36 см\r\nГлубина сиденья: 39 см\r\nВысота сиденья: 45 см', 0),
(5, 'Ингольф', 3299, 'Массив сосны – натуральный материал, который со временем выглядит только лучше.', 'Протирать тканью, смоченной мягким моющим средством.\r\nВытирать чистой сухой тканью.', 'Протестировано для: 110 кг\r\nШирина: 43 см\r\nГлубина: 52 см\r\nВысота: 91 см\r\nШирина сиденья: 41 см\r\nГлубина сиденья: 38 см\r\nВысота сиденья: 44 см', 1),
(7, 'Третье', 1249, 'Стул можно сложить, что позволяет экономить место при хранении.', 'Протирать тканью, смоченной мягким моющим средством.\r\nВытирать чистой сухой тканью.', 'Протестировано для: 100 кг\r\nШирина: 44 см\r\nГлубина: 51 см\r\nВысота: 77 см\r\nШирина сиденья: 38 см\r\nГлубина сиденья: 33 см\r\nВысота сиденья: 46 см', 2),
(8, 'Каустби', 1799, 'Массив сосны – натуральный материал, который со временем выглядит только лучше.', 'Протирать тканью, смоченной мягким моющим средством.\r\nВытирать чистой сухой тканью.', 'Протестировано для: 110 кг\r\nШирина: 44 см\r\nГлубина: 48 см\r\nВысота: 103 см\r\nШирина сиденья: 44 см\r\nГлубина сиденья: 41 см\r\nВысота сиденья: 46 см', 3),
(11, 'Хенриксдаль', 6999, 'Высокая спинка и сиденье с наполнителем из полиэстерной ваты обеспечивают максимальный комфорт.', 'Стул с длинным чехлом:\r\nКаркас\r\nПротирать влажной тканью.\r\nВытирать чистой сухой тканью.\r\n\r\nЧехол для стула, длинный:\r\nСъемный чехол\r\nМашинная стирка 60°С.\r\nНе отбеливать.\r\nНе сушить в стиральной машине.\r\nГладить в высоком температурном режиме.\r\nХимическая чистка, нормальный режим.', 'Протестировано для: 110 кг\r\nШирина: 51 см\r\nГлубина: 58 см\r\nВысота: 97 см\r\nШирина сиденья: 51 см\r\nГлубина сиденья: 42 см\r\nВысота сиденья: 47 см', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `reviewer` varchar(255) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `reviewer`, `review`) VALUES
(22, 'Владимир', 'Сделали заказ кровать, тумбочки, комод. Привезли даже без аванса. Всю сумму оплатили по факту доставки. Доставили в удобное для меня время. В комплекте - подробная инструкция по сборке. Места для саморезов отмаркированы, детали подписаны по номерам. После сборки осталась куча болтиков, крепежей, всё было с запасом. Вся мебель добротная, выглядит точно как на фотографиях с сайта. Очень довольны!'),
(23, 'Анастасия', 'При сборке прихожей просверленные отверстия на одних элементах не совпадали с другими. Пришлось использовать дрель! И, к сожалению, нельзя сослаться на «руки не из того места». Были рассмотрены и опробованы ВСЕ варианты прежде чем прийти к выводу , что это брак .\r\nНа дверцать имеются сколы( конечно не настолько значительные, НО). Необходимо более трепетное отношение к мебели при ее изготовлении!'),
(24, 'Василий Сергеевич', 'На фото камод с шестью ящиками, из них два верхних маленькие. Все они с направляющими. А в реалии в двух верхних ящиках вместо направляющих прибиты дощечки-по старинке. И в описании направляющие не предусмотрены. В общем не подкапаешся, а камод нужен был. Пришлось докупать недостающий элемент и дорабатывать самому. Из-за такого кидалова \r\nодин негатив. ');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`) VALUES
(999, 'Федор Савиных', 'fedor', '1234qwer');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bigimages`
--
ALTER TABLE `bigimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `chairs`
--
ALTER TABLE `chairs`
  ADD PRIMARY KEY (`id_chairs`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `chairs`
--
ALTER TABLE `chairs`
  MODIFY `id_chairs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `chairs`
--
ALTER TABLE `chairs`
  ADD CONSTRAINT `chairs_ibfk_1` FOREIGN KEY (`id`) REFERENCES `bigimages` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
