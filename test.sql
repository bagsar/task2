-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 09 2021 г., 12:13
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `list`
--

CREATE TABLE `list` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `list`
--

INSERT INTO `list` (`id`, `name`, `last`, `age`) VALUES
(1, 'bag', 'sar', '30'),
(2, 'bag', 'sar', '30'),
(4, 'name', 'lastname ', '30'),
(5, 'name', 'lastname ', '30'),
(6, 'name', 'lastname ', '30'),
(7, 'ytfd', 'gtfrd', '52'),
(41, 'apifix.trade', 'reertert', '74'),
(43, 'Bagrat', 'reertert', '74'),
(44, 'Bagrat', 'reertert', '74'),
(45, 'qaaaxc', 'fff', '14'),
(52, 'apifix.trade', 'reertert', '74'),
(53, 'Bagrat', 'reertert', '74'),
(54, 'Schubert Trio 2 In E Flat Major Opus 100 Second Mo', 'reertert', '74'),
(55, 'hhhhhhhh', 'hhhhhh', '35'),
(56, '7777', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `access_token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `token`
--

INSERT INTO `token` (`id`, `access_token`) VALUES
(1, '{\"access_token\":\"ya29.a0AfH6SMB3f_JETIyvVQ2znZ3gNYp2n8X8n7h7QZrv_cVZCeK65kN_8e67XMXYLUUtmjocLqgaFWWBgwjYbgqg8uDYAZFQpUj-XDfRLkoMFyjP3PPxW2bWXtQqyum0VpvF-EXpDT8BxqlM7n0Ahp5txPVC7T6Mkw\",\"expires_in\":3599,\"scope\":\"https://www.googleapis.com/auth/spreadsheets\",\"token_type\":\"Bearer\",\"refresh_token\":\"1//096BZ7tqpUcMDCgYIARAAGAkSNwF-L9Ir1mBMmRbysEynptJkbEVZGVp0UvnC9WIGnsv-WazswePFq6kXorfRgp4NrcBNDDUGOno\"}');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `list`
--
ALTER TABLE `list`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT для таблицы `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
