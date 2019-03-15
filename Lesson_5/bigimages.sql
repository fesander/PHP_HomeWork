-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Мар 15 2019 г., 08:02
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
  `path` text NOT NULL,
  `smallPath` text NOT NULL,
  `size` double NOT NULL,
  `name` text NOT NULL,
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bigimages`
--

INSERT INTO `bigimages` (`id`, `path`, `smallPath`, `size`, `name`, `views`) VALUES
(0, './big', './small', 21588, 'chair_1.jpg', 8),
(1, './big', './small', 30836, 'chair_2.jpg', 5),
(2, './big', './small', 28474, 'chair_3.jpg', 4),
(3, './big', './small', 6958, 'chair_4.jpg', 2),
(4, './big', './small', 7846, 'chair_5.jpg', 3),
(5, './big', './small', 2164, 'chair_6.jpg', 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bigimages`
--
ALTER TABLE `bigimages`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
