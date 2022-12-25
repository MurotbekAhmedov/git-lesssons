-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Ноя 22 2022 г., 17:56
-- Версия сервера: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- Версия PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bd_auth`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `pass` int(11) NOT NULL,
  `positionjob` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `pass`, `positionjob`, `level`, `language`, `comments`, `file`) VALUES
(2, '$email', '$firstname', 11, 'positionjob', '$leve', '$language', '$comments', 0x31),
(14, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', 'asd', 0x31),
(15, 'murotbek@mail.ru', 'Муротбек', 7820, 'Сотрудник', 'Intern', 'en', 'asd', 0x31),
(16, 'murotbek@mail.ru', 'Муротбек', 7820, 'Сотрудник', 'Intern', 'en', 'asd', 0x31),
(17, 'murotbek@mail.ru', 'Муротбек', 7820, 'Сотрудник', 'Intern', 'en', 'asd', 0x31),
(18, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Junior', 'en', 'qweqw', 0x31),
(19, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', 'ads', 0xd097d0b0d0b4d0b0d0bdd0b8d0b520332e646f63),
(20, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', 'asda', ''),
(21, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', 'asda', ''),
(22, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', 'asda', ''),
(23, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', 'doom', ''),
(24, 'murotbek@mail.ru', 'фыв', 7820, 'Студент', 'Intern', 'ru', 'вфыфы', ''),
(25, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', '', ''),
(26, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', '', ''),
(27, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', 'sad', ''),
(28, 'murotbek@2000.ru', 'Дмитрий', 7820, 'Студент', 'Intern', 'ru', '', ''),
(29, 'murotbek@2000.ru', 'Дмитрий', 7820, 'Студент', 'Intern', 'ru', '', ''),
(30, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', '', ''),
(31, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', '', ''),
(32, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', '', ''),
(33, 'murotbek@mail.ru', 'Муротбекasdas', 7820, 'Студент', 'Intern', 'ru', 'qqwe', ''),
(34, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', 'ыфв', ''),
(35, 'murotbek@mail.ru', 'asdasd', 7820, 'Студент', 'Intern', 'ru', '', ''),
(36, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', '', ''),
(37, 'murotbek@mail.ru', 'asdasd', 7820, 'Студент', 'Intern', 'ru', 'asdasds', ''),
(38, 'murotbek@mail.ru', 'asda', 7820, 'Студент', 'Intern', 'ru', '', ''),
(39, 'murotbe123123k@mail.ru', 'Муротбек', 782012312, 'Сотрудник', 'Intern', 'uz', 'qweqw', ''),
(40, 'murotbek@mail.ru', 'aeeqe4234132', 7820, 'Студент', 'Intern', 'ru', '', ''),
(41, 'murotbek@mail.ru', 'asdasdas', 7820, 'Студент', 'Intern', 'ru', '', ''),
(42, 'murotbek@mail.ru', 'asddaadddad', 7820, 'Студент', 'Intern', 'ru', 'adsasd', ''),
(43, 'murotbek@mail.ru', 'Муротбекadasd', 7820, 'Сотрудник', 'Intern', 'ru', 'asdas', ''),
(44, 'murotbek@mail.ru', 'Муротбекadasd', 7820, 'Сотрудник', 'Intern', 'ru', 'asdas', ''),
(45, 'murotbek@mail.ru', 'Муротбекadasd', 7820, 'Сотрудник', 'Intern', 'ru', 'asdas', ''),
(46, 'murotbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', 'asdasd', ''),
(47, 'muroasdasdtbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Intern', 'ru', '', ''),
(48, 'muroasdasdtbek@mail.ru', 'Муротбек', 7820, 'Сотрудник', 'Intern', 'en', 'dasd', ''),
(49, 'muroasdasdtbek@mail.ru', 'Муротбекs', 7820, 'Сотрудник', 'Senior', 'en', 'dasdasdas', ''),
(50, 'murotbaaaaek@mail.ru', 'Муротбек', 7820, 'Студент', 'Junior', 'ru', 'cooment', ''),
(51, 'murotbaaaaek@mail.ru', 'Муротбек', 7820, 'Студент', 'Senior', 'en', 'cooment', ''),
(52, 'muroaaatbek@mail.ru', 'Муротбек', 7820, 'Студент', 'Junior', 'ru', 'adss', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
