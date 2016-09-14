-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Eyl 2016, 17:07:23
-- Sunucu sürümü: 10.1.13-MariaDB
-- PHP Sürümü: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje3`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `table1`
--

CREATE TABLE `table1` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(16) NOT NULL,
  `surname` varchar(16) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phonenum` varchar(11) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `table1`
--

INSERT INTO `table1` (`id`, `name`, `surname`, `email`, `phonenum`, `note`) VALUES
(1, 'Zekvan', 'Arslan', 'zkvnarsln@gmail.com', '05314983588', 'New Proje'),
(3, 'Yunus', 'Baloğlu', 'yunusemrebaloglu@gmail.com', '05457927959', 'My best Friend');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
