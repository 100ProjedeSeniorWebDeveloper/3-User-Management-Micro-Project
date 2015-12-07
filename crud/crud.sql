--
-- Veritabanı: `crud`
--
CREATE DATABASE IF NOT EXISTS `crud` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `crud`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_bilgileri`
--

CREATE TABLE IF NOT EXISTS `kullanici_bilgileri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `cep` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ek` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

