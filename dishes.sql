-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 02 2024 г., 09:22
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dishes`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dish`
--

CREATE TABLE `dish` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `category` varchar(256) NOT NULL,
  `recipe_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `dish`
--

INSERT INTO `dish` (`id`, `name`, `category`, `recipe_number`) VALUES
(1, 'Салат с рукколой и пармезаном', 'Salads', 1),
(2, 'Салат мимоза', 'Salads', 2),
(3, 'Селёдка под шубой', 'Salads', 3),
(4, 'Салат из соевой спаржи', 'Salads', 4),
(5, 'Салат с зелёным луком и яйцом', 'Salads', 5),
(6, 'Томатный рыбный суп', 'Soups', 1),
(7, 'Перепелиный бульон', 'Soups', 2),
(8, 'Гороховый суп с копчёностями', 'Soups', 3),
(9, 'Томатный суп с мидиями', 'Soups', 4),
(10, 'Борщ с грибами', 'Soups', 5),
(11, 'Тушёный кабачок', 'Mushrooms_vegetables', 1),
(12, 'Вешенки с чесноком и петрушкой', 'Mushrooms_vegetables', 2),
(13, 'Баклажаны с чесноком и зеленью', 'Mushrooms_vegetables', 3),
(14, 'Шампиньоны с беконом в соусе', 'Mushrooms_vegetables', 4),
(15, 'Кукуруза в пряном масле', 'Mushrooms_vegetables', 5),
(16, 'Стерлядь с картошкой и шампиньонами', 'Fish_seafood', 1),
(17, 'Караси в сметане в духовке', 'Fish_seafood', 2),
(18, 'Сазан в духовке', 'Fish_seafood', 3),
(19, 'Осьминог тушёный в сливках', 'Fish_seafood', 4),
(20, 'Осьминог по гречески', 'Fish_seafood', 5),
(21, 'Говяжья печень по-восточному', 'Meat', 1),
(22, 'Свиные рёбра в томатном маринаде', 'Meat', 2),
(23, 'Шашлык на сковородке из свинины', 'Meat', 3),
(24, 'Бараньи рёбра', 'Meat', 4),
(25, 'Говядина в красном вине', 'Meat', 5),
(26, 'Заливной пирог с капустой', 'Bakery', 1),
(27, 'Лимонное печенье Трещенки', 'Bakery', 2),
(28, 'Медовая коврижка', 'Bakery', 3),
(29, 'Ватрушки с творогом', 'Bakery', 4),
(30, 'Кулич Краффин', 'Bakery', 5),
(31, 'Мармелад из ягод', 'Desserts', 1),
(32, 'Десерт из тыквы с корицей и изюмом', 'Desserts', 2),
(33, 'Солёная карамель', 'Desserts', 3),
(34, 'Меренговый рулет с ягодами', 'Desserts', 4),
(35, 'Арахис в карамели', 'Desserts', 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
