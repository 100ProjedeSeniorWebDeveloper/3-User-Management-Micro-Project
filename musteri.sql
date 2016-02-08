-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 08 Şubat 2016 saat 23:45:55
-- Sunucu sürümü: 5.1.33
-- PHP Sürümü: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `musteri`
--

-- --------------------------------------------------------

--
-- Tablo yapısı: `musteri`
--

CREATE TABLE IF NOT EXISTS `musteri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_ad` varchar(100) NOT NULL,
  `musteri_soyad` varchar(100) NOT NULL,
  `musteri_cep` varchar(11) NOT NULL,
  `musteri_email` varchar(100) NOT NULL,
  `musteri_not` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `musteri`
--

