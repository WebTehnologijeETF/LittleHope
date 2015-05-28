-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2015 at 09:56 PM
-- Server version: 5.6.24-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wt_baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `administratori`
--

CREATE TABLE IF NOT EXISTS `administratori` (
  `Username` varchar(20) COLLATE utf32_slovenian_ci NOT NULL,
  `Password` varchar(32) COLLATE utf32_slovenian_ci NOT NULL,
  `Email` text COLLATE utf32_slovenian_ci NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci;

--
-- Dumping data for table `administratori`
--

INSERT INTO `administratori` (`Username`, `Password`, `Email`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'ekusundzij1@etf.unsa.ba'),
('admina1', '91183e1cb4e46961f86a2ef6287927ad', '/');

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE IF NOT EXISTS `komentari` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Autor` text COLLATE utf32_slovenian_ci NOT NULL,
  `Email` text COLLATE utf32_slovenian_ci NOT NULL,
  `Tekst` text COLLATE utf32_slovenian_ci NOT NULL,
  `Novost` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`Id`, `Datum`, `Autor`, `Email`, `Tekst`, `Novost`) VALUES
(1, '2015-05-26 14:16:24', 'elma', 'elma@etf.ba', 'Divna novost', 2),
(2, '2015-05-26 14:36:42', 'elma', 'elma@etf.ba', 'komentar broj 1', 3),
(3, '2015-05-26 16:48:51', 'Elma Kusundzija', 'ekusundzij1@etf.unsa.ba', 'Neki glup komentar', 2),
(4, '2015-05-26 16:52:20', 'Elma Kusundzija', 'elma_1.1@hotmail.com', 'Zadnji komentar', 2),
(5, '2015-05-26 17:07:25', '', '', 'neki komentar', 2),
(6, '2015-05-26 18:01:45', 'elma', 'ekusundzij1@etf.unsa.ba', 'komentar', 3),
(7, '2015-05-26 18:16:53', 'elma', 'elma@etf.ba', 'http://www.akademija.uns.ac.rs/wp-content/uploads/2012/03/slika2011.jpg', 4),
(8, '2015-05-26 18:27:25', '', '', '&lt;li&gt;\n&lt;div&gt; amaterski pokusaj da nesto postignem &lt;/div&gt;\n&lt;/li&gt; ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `novosti`
--

CREATE TABLE IF NOT EXISTS `novosti` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Naslov` text COLLATE utf32_slovenian_ci NOT NULL,
  `Tekst` text COLLATE utf32_slovenian_ci NOT NULL,
  `DetaljnijiTekst` text COLLATE utf32_slovenian_ci NOT NULL,
  `Autor` text COLLATE utf32_slovenian_ci NOT NULL,
  `Slika` text COLLATE utf32_slovenian_ci NOT NULL,
  `Datum` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `novosti`
--

INSERT INTO `novosti` (`Id`, `Naslov`, `Tekst`, `DetaljnijiTekst`, `Autor`, `Slika`, `Datum`) VALUES
(2, 'naslov', 'tekst', 'detaljnijiTekst', 'autor', 'http://cdn.slike.hr/wp-content/uploads/sites/10/store/mali-zec-slika.jpg', '2015-05-12 00:00:00'),
(3, 'Naslov3', 'DuziTekst&lt;br /&gt;Dva&lt;br /&gt;Tri&lt;br /&gt;Cetiri', 'Naslov3', 'Elma', 'http://www2.shrani.si/files/slika006510177.jpg', '2015-05-08 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
