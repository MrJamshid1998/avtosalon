-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 04 2022 г., 08:40
-- Версия сервера: 10.1.30-MariaDB
-- Версия PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `autosalon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kasbi` varchar(100) NOT NULL,
  `xabar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `kasbi`, `xabar`) VALUES
(1, 'Jamshid', 'jamshid@mail.ru', 'Dasturchi', 'salom meni bitta savolim bor edi?'),
(2, 'Nusrat', 'nusrat@mail.ru', 'dasturchi', 'salom'),
(3, 'qwerty', 'qwerty', 'qwert', 'qwerty'),
(4, 'Jamshid', 'jamshid@mail.ru', 'Dasturchi', 'jdfkjhskhfkhdhfks 212123213 12321nsdfndshf');

-- --------------------------------------------------------

--
-- Структура таблицы `mashinalar`
--

CREATE TABLE `mashinalar` (
  `id` int(11) NOT NULL,
  `nomi` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `narxi` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `mal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mashinalar`
--

INSERT INTO `mashinalar` (`id`, `nomi`, `model`, `narxi`, `img`, `mal`) VALUES
(1, 'Labo', 'Chevrolet', 60000000, 'assets\\img\\auto\\labo.png', 'Yuk xona sig`imi l: 800 L;\r\nUzatish qutisi	MT5;\r\nXavfsizlik	-;\r\nYonilg`i iste`moli 7.8/8.6 L;\r\nXavfsizlik yostiqchalari	-.'),
(2, 'Damas', 'Chevrolet', 81000000, 'assets\\img\\auto\\damas.png', 'Yuk xona sig`imi l: 400 L;\r\nUzatish qutisi	MT5;\r\nXavfsizlik	-;\r\nYonilg`i iste`moli 7.8/8.6 L;\r\nXavfsizlik yostiqchalari	-.'),
(3, 'Spark', 'Chevrolet', 106000000, 'assets\\img\\auto\\spark.png', 'Yuk xona sig`imi l.	170/568 L;\r\nUzatish qutisi	MT5/AT4;\r\nXavfsizlik	ABS;\r\nYonilg`i iste`moli      6.2/8.2 L;\r\nXavfsizlik yostiqchalari	1.'),
(4, 'Nexia 3', 'Chevrolet', 116000000, 'assets\\img\\auto\\nexia.png', 'Yuk xona sig`imi l.	400 L;\r\nUzatish qutisi	MT5/AT6;\r\nXavfsizlik	ABS;\r\nYonilg`i iste`moli      8/9.3 L;\r\nXavfsizlik yostiqchalari	2.'),
(5, 'Cobalt', 'Chevrolet', 126000000, 'assets\\img\\auto\\cobalt.png', 'Yuk xona sig`imi l.	563 L;\r\nUzatish qutisi	MT5/AT6;\r\nXavfsizlik	ABS;\r\nYonilg`i iste`moli      8.5/9.0 L;\r\nXavfsizlik yostiqchalari	2.'),
(6, 'Lacetti', 'Chevrolet', 145000000, 'assets\\img\\auto\\lacetti.png', 'Yuk xona sig`imi l.	405 L;\r\nUzatish qutisi	MT5/AT6;\r\nXavfsizlik	ABS;\r\nYonilg`i iste`moli      8.5/9.5 L;\r\nXavfsizlik yostiqchalari	2.'),
(7, 'Malibu', 'Chevrolet', 369000000, 'assets\\img\\auto\\malibu3.png', 'Yuk xona sig`imi l.	447 L;\r\nUzatish qutisi	AT6;\r\nXavfsizlik	ABS;\r\nYonilg`i iste`moli      T 8.5/8.1 L;\r\nXavfsizlik yostiqchalari	8.'),
(8, 'Tracker 2', 'Chevrolet', 229000000, 'assets\\img\\auto\\tracker2.png', 'Yuk xona sig`imi l.	447 L;\r\nUzatish qutisi	AT6;\r\nXavfsizlik	ABS;\r\nYonilg`i iste`moli      T 8.5/8.1 L;\r\nXavfsizlik yostiqchalari	8.'),
(9, 'Equinox', 'Chevrolet', 430000000, 'assets\\img\\auto\\equinox.png', 'Yuk xona sig`imi l.	1624 L;\r\nUzatish qutisi	AT9;\r\nXavfsizlik	ABS;\r\nYonilg`i iste`moli      8.2 L;\r\nXavfsizlik yostiqchalari	6.'),
(10, 'Traverse', 'Chevrolet', 470000000, 'assets\\img\\auto\\traverse.png', 'Yuk xona sig`imi l.	651/2781 L;\r\nUzatish qutisi	AT9;\r\nXavfsizlik	ABS;\r\nYonilg`i iste`moli      13.6/7.8 L;\r\nXavfsizlik yostiqchalari	6.'),
(11, 'Trailblazer', 'Chevrolet', 490000000, 'assets/\\img\\auto\\trailblazer.png', ' Yuk xona sig`imi l.	1830 L;\r\n Uzatish qutisi	AT6;\r\n Xavfsizlik	ABS;\r\n Yonilg`i iste`moli   9,7 L;\r\n Xavfsizlik yostiqchalari	6.'),
(12, 'Tahoe', 'Chevrolet', 530000000, 'assets/\\img\\auto\\tahoe.png', ' Yuk xona sig`imi l.	722 / 3480 L;\r\n Uzatish qutisi	AT10;\r\n Xavfsizlik	ABS;\r\n Yonilg`i iste`moli   17.9 / 9.6 L;\r\n Xavfsizlik yostiqchalari	7.');

-- --------------------------------------------------------

--
-- Структура таблицы `msotish`
--

CREATE TABLE `msotish` (
  `id` int(11) NOT NULL,
  `idm` int(11) NOT NULL,
  `fio` varchar(50) NOT NULL,
  `tel` int(11) NOT NULL,
  `passr` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `msotish`
--

INSERT INTO `msotish` (`id`, `idm`, `fio`, `tel`, `passr`) VALUES
(1, 1, 'dasfsf', 0, '1212'),
(2, 1, '', 0, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mashinalar`
--
ALTER TABLE `mashinalar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `msotish`
--
ALTER TABLE `msotish`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `mashinalar`
--
ALTER TABLE `mashinalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `msotish`
--
ALTER TABLE `msotish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
