-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2024 at 03:03 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cingciong`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `video_id`, `content`) VALUES
(1, 3, 1, 'Mój stary miał nową kobiete, więc mu ją wyruchałem i teraz chodze skuty cały dzień'),
(2, 3, 1, 'Twój brat wygląda jak pies. Jebana patologia. Żebyś kurwo zdechł'),
(3, 3, 2, 'Jak ja nienawidze policji. Kiedys mnie kurwy pałą najebały. Dupa boli mnie do dzisiaj, chyba mam jakieś krosty w odbycie');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pastome` varchar(255) NOT NULL,
  `isadmin` tinyint(1) NOT NULL DEFAULT 0,
  `user_url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `email`, `password`, `pastome`, `isadmin`, `user_url`, `description`) VALUES
(1, 'Lufa', 'glina4422@wp.pl', '$2y$10$g0OkhiA.jyZxAAkESA15kurKT3kLKkFkI0g2XIVtpNeUHoeGOMAE6', 'ZAQ!2wsx', 1, '', 'Mam małego'),
(2, 'Andrzej', 'andrzej@wp.pl', '$2y$10$b7Co09yVnCiQZCVJ4mp96OODUr.xFdc20NqVdhInY14D.SMM7KivC', 'Andrejek123', 0, '', ''),
(3, 'Heniek', 'henryk886@wp.pl', '$2y$10$rskbVfGOfTul3wWV4/gyNOKAH1nTZvSVuzAc9E1Ho0UIDovTo4OvG', 'Henioo@123', 0, '', ''),
(4, 'ReckeinPL', 'Reckein@wp.pl', '$2y$10$nwqS4392E6JTo7vc8Lu.P.y7lK7i2U8mp4ue6ut/bmXE9Rlq7yTP.', '0000000000', 0, '', ''),
(5, 'Debil2', 'huj123@wp.pl', '$2y$10$2Ydoiu3R2W5X/I9eL7pEtuCZvzOIlY4zwuvSXkE4AqW2mhfbw2itm', 'ZAQ!2wsx', 0, '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `user_id`, `title`, `description`, `url`) VALUES
(1, 2, 'Big gato shocked whats happened', '#gato #shock #bigcat #cat', 'videos/vid1.mp4'),
(2, 2, 'Dancing with my gyrls', '#love #you', 'videos/vid2.mp4'),
(3, 0, '', '', 'videos/vid3.mp4'),
(4, 0, '', '', 'videos/vid4.mp4'),
(5, 0, '', '', 'videos/vid5.mp4'),
(6, 0, '', '', 'videos/vid6.mp4'),
(7, 0, '', '', 'videos/vid7.mp4'),
(8, 0, '', '', 'videos/vid8.mp4'),
(9, 0, '', '', 'videos/vid9.mp4'),
(10, 0, '', '', 'videos/vid10.mp4'),
(11, 0, '', '', 'videos/vid11.mp4'),
(12, 0, '', '', 'videos/vid12.mp4'),
(13, 0, '', '', 'videos/vid13.mp4'),
(14, 0, '', '', 'videos/vid14.mp4'),
(15, 0, '', '', 'videos/vid15.mp4'),
(16, 0, '', '', 'videos/vid16.mp4'),
(17, 0, '', '', 'videos/vid17.mp4'),
(18, 0, '', '', 'videos/vid18.mp4'),
(19, 0, '', '', 'videos/vid19.mp4'),
(20, 0, '', '', 'videos/vid20.mp4'),
(21, 0, '', '', 'videos/vid21.mp4'),
(22, 0, '', '', 'videos/vid22.mp4'),
(23, 0, '', '', 'videos/vid23.mp4'),
(24, 0, '', '', 'videos/vid24.mp4');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
