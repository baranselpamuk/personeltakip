-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Şub 2019, 20:48:46
-- Sunucu sürümü: 5.6.15-log
-- PHP Sürümü: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `personeltakip`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personeller`
--

CREATE TABLE IF NOT EXISTS `personeller` (
  `pers_id` int(10) NOT NULL AUTO_INCREMENT,
  `pers_AdiSoyadi` varchar(50) NOT NULL,
  `pers_Unvani` varchar(50) NOT NULL,
  `pers_Bransi` varchar(50) NOT NULL,
  `pers_kadro` varchar(50) NOT NULL,
  `pers_iletisim` varchar(50) NOT NULL,
  `pers_eposta` varchar(50) NOT NULL,
  `pers_DogumTarihi` date NOT NULL,
  `pers_Cinsiyet` varchar(50) NOT NULL,
  `pers_OgrenimDurumu` varchar(50) NOT NULL,
  `pers_Askerlik` varchar(50) NOT NULL,
  `pers_KurumAdi` varchar(400) NOT NULL,
  `pers_AtamaSekli` varchar(60) NOT NULL,
  `pers_BaslamaTarihi` date NOT NULL,
  `pers_AyrilisTarihi` date NOT NULL,
  `pers_TerfiTarihi` date NOT NULL,
  `pers_SonDurum` varchar(200) NOT NULL,
  `pers_FormKayitTarihi` datetime NOT NULL,
  PRIMARY KEY (`pers_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Tablo döküm verisi `personeller`
--

INSERT INTO `personeller` (`pers_id`, `pers_AdiSoyadi`, `pers_Unvani`, `pers_Bransi`, `pers_kadro`, `pers_iletisim`, `pers_eposta`, `pers_DogumTarihi`, `pers_Cinsiyet`, `pers_OgrenimDurumu`, `pers_Askerlik`, `pers_KurumAdi`, `pers_AtamaSekli`, `pers_BaslamaTarihi`, `pers_AyrilisTarihi`, `pers_TerfiTarihi`, `pers_SonDurum`, `pers_FormKayitTarihi`) VALUES
(1, 'AhmeTYs', 'Doktors', 'KBBs', '', '', '', '2017-03-02', 'Erkek', 'universites', 'Yapmadı', 'KurumAdisss', 'dogrudanatamas', '2017-03-04', '2017-03-05', '2017-03-05', 'sondurumsss', '0000-00-00 00:00:00'),
(2, 'personel1', 'doktro1', 'kbb1', '', '', '', '2017-02-01', 'erkek1', 'lisans1', 'yaptı1', 'mu1', 'atama1', '2017-02-01', '2018-03-01', '2019-04-01', 'son1', '2017-03-06 14:59:48'),
(3, 'sdsa1', 'dsadas1', 'sadsadsa1', '', '', '', '2017-04-15', 'Erkek1', 'sdsad1', 'sadsa1', 'dsad1', 'sadsa1', '2017-01-17', '2017-01-23', '2017-11-21', 'sdsa11', '2017-03-06 12:39:36'),
(7, 'deneme', 'deneme', 'deneme', '', '', '', '2017-03-01', 'Erkek', 'deneme', 'Yapmadı', 'deneme', 'deneme', '2017-03-01', '0000-00-00', '2017-03-13', 'deneme', '2017-03-06 23:21:53'),
(8, 'yıldırım', '', '', '', '', '', '2017-03-17', 'Kadın', '', 'Yapmadı', '', '', '2017-03-06', '0000-00-00', '0000-00-00', '', '2017-03-07 08:24:41'),
(6, 'fff', 'fff', 'fff', '', '', '', '2017-03-14', 'Erkek', 'fff', 'Muaf', 'fffff', 'fff', '2017-03-18', '0000-00-00', '2017-03-24', 'ffff', '2017-03-06 22:11:00'),
(9, 'muhittin akçil', 'müdür', 'doktor', '', '', '', '2015-01-17', 'Erkek', 'lisans', 'Yapmadı', 'muş khb', 'yok', '2017-01-01', '0000-00-00', '2000-01-01', 'belirsiz', '2017-03-07 12:41:41'),
(10, '', '', '', 'kadro', 'iletisim', 'eposta', '0000-00-00', 'SeçimYok!', '', 'SeçimYok!', '', '', '0000-00-00', '2009-01-01', '0000-00-00', '', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
