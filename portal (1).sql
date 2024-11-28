-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 28 2024 г., 18:03
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `portal`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consent` tinyint(1) NOT NULL DEFAULT '0',
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `email`, `login`, `password`, `consent`, `role`) VALUES
(3, 'admin', 'admin@admin', 'admin', '$2y$10$D7lE7yElGc5gczbSTVf0suk681pQAG4SJ.x/VW3Go222dM262yASW', 1, 'admin'),
(4, 'user', 'user@user', 'user', '$2y$10$/vqHALvlafiU8JH00D14i.zLdzTqGST59LEr9.4Cfmew37O63RvrC', 1, 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `zayvki`
--

CREATE TABLE `zayvki` (
  `id` int(11) NOT NULL,
  `name` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `context` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategoria` enum('Ремонт дорог','Замена фасада','Уборка мусора') COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `zayvki`
--

INSERT INTO `zayvki` (`id`, `name`, `context`, `kategoria`, `file`) VALUES
(4, 'dsf', 'sdfsdf', 'Ремонт дорог', 'car.png'),
(10, 'df', 'sdf', 'Ремонт дорог', 'f14f58bcca71fe7dd0cd0b49ca9bdc98.jpg'),
(11, 'df', 'sdf', 'Ремонт дорог', 'f14f58bcca71fe7dd0cd0b49ca9bdc98.jpg'),
(12, 'ыва', 'ыыва', 'Ремонт дорог', '338a955c5c78a42954d4613e4a26d6de.jpg'),
(13, ' drfg', 'dfgdf', 'Замена фасада', '338a955c5c78a42954d4613e4a26d6de.jpg'),
(14, 'dfg', 'dg', 'Ремонт дорог', '338a955c5c78a42954d4613e4a26d6de.jpg'),
(15, 'dfg', 'dfg', 'Ремонт дорог', '338a955c5c78a42954d4613e4a26d6de.jpg'),
(16, 'sf', 'sdf', 'Замена фасада', 'f14f58bcca71fe7dd0cd0b49ca9bdc98.jpg'),
(17, 'dfg', 'dfg', 'Ремонт дорог', '9f0931b73670cf587439263d893d652a.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Индексы таблицы `zayvki`
--
ALTER TABLE `zayvki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `zayvki`
--
ALTER TABLE `zayvki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
