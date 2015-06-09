-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2015 at 03:10 PM
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
('admina', '91183e1cb4e46961f86a2ef6287927ad', '/'),
('bla', '10811412350ad99e5d036db40c996de1', 'ekusundzij1@etf.unsa.ba');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci AUTO_INCREMENT=110 ;

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
(8, '2015-05-26 18:27:25', '', '', '&lt;li&gt;\n&lt;div&gt; amaterski pokusaj da nesto postignem &lt;/div&gt;\n&lt;/li&gt; ', 4),
(9, '2015-06-07 13:11:28', 'elma', 'ekusundzij1@etf.unsa.ba', 'probam dinamcki dio', 2),
(10, '2015-06-07 13:11:54', 'elma', 'elma@etf.ba', 'probavam dinamicki dio 2', 2),
(12, '2015-06-07 13:18:28', 'fatima', 'fatima@etf.unsa.ba', 'nikad dosta komentara za dinamiku', 2),
(14, '2015-06-07 17:54:11', 'elma', 'bla@elma', 'da li ce ostati', 2),
(21, '2015-06-07 22:43:50', 'bla', 'bla', 'bla', 3),
(31, '2015-06-07 22:54:22', '', '', 'komentar', 3),
(57, '2015-06-07 23:44:00', '', '', '', 3),
(63, '2015-06-07 23:55:28', '', '', 'proba', 3),
(64, '2015-06-07 23:55:39', '', '', 'proba', 2),
(65, '2015-06-07 23:55:47', '', '', '', 3),
(66, '2015-06-07 23:56:15', '', '', 'proba', 4),
(67, '2015-06-07 23:56:33', '', '', '', 4),
(68, '2015-06-07 23:57:22', '', '', '', 4),
(69, '2015-06-07 23:58:04', '', '', '', 4),
(70, '2015-06-07 23:59:53', 'evo ovdje ', '', '', 4),
(71, '2015-06-08 00:10:24', 'imenko', '', '', 3),
(72, '2015-06-08 00:13:38', 'elmita', '', 'bez tebe', 4),
(73, '2015-06-08 00:14:00', 'elmita', 'beztebe@ludooo.ba', 'djubre volim te', 4),
(74, '2015-06-08 00:14:31', 'idu ptice selie', 'elma@etf.ba', 'seko duso', 4),
(75, '2015-06-08 00:14:54', 'odlazim', 'ekusundzij1@etf.unsa.ba', 'volim te jos', 3),
(76, '2015-06-08 00:15:15', 'mislim na nas', 'elma_1.1@hotmail.com', 'volim te jos', 2),
(77, '2015-06-08 00:25:44', '', '', '', 2),
(78, '2015-06-08 00:26:27', '', '', '', 2),
(79, '2015-06-08 00:26:37', 'bla', '', '', 2),
(80, '2015-06-08 00:28:03', 'pile', '', '', 2),
(81, '2015-06-08 00:28:10', '', '', '', 2),
(82, '2015-06-08 00:29:16', 'juhuuuu', '', '', 2),
(83, '2015-06-08 00:31:02', 'imenko', 'blaa', 'komentar', 2),
(84, '2015-06-08 00:31:53', 'ime', 'email@etf', 'evo vise', 3),
(85, '2015-06-08 01:48:47', '', '', 'komentarcic', 2),
(86, '2015-06-08 13:18:56', '', '', 'komarci su grozni', 2),
(87, '2015-06-08 13:19:40', '', '', 'komnetari svuda oko nas', 3),
(88, '2015-06-08 13:33:29', '', '', 'fantazija', 4),
(89, '2015-06-08 13:36:06', '', '', 'fantazija', 4),
(90, '2015-06-08 13:36:22', '', '', 'bla', 3),
(91, '2015-06-08 13:36:25', '', '', 'konj', 3),
(92, '2015-06-08 13:50:21', 'konj', '', 'probam', 2),
(93, '2015-06-08 13:50:37', 'konj', '', 'opetprobam', 4),
(94, '2015-06-08 13:52:22', 'ja', '', 'probam komentar', 2),
(95, '2015-06-08 13:53:17', 'esmeralda', '', 'da li ce proraditi', 2),
(96, '2015-06-08 13:53:44', 'esmeralda', '', 'da li ce proraditi2', 2),
(97, '2015-06-08 13:57:48', 'esperansa', '', 'neki glup komentar samo da probam', 3),
(98, '2015-06-08 14:06:12', 'elma', '', 'komntar1', 4),
(99, '2015-06-08 14:06:43', 'elma2', '', 'odgovor na komentar 1', 4),
(100, '2015-06-08 14:07:15', 'elma', '', 'da li ces sada proci', 4),
(101, '2015-06-08 14:07:36', 'elma', '', 'da li ces sada proci1', 4),
(103, '2015-06-08 14:12:37', 'anonimus', '', 'helooou', 2),
(104, '2015-06-08 14:12:52', '', '', 'bic pliz', 2),
(105, '2015-06-08 21:27:01', 'anoniman', '', 'neki komentar', 2),
(106, '2015-06-08 21:27:59', 'korisnik', 'ekusundzij1@etf.unsa.ba', 'da li ce da prodje', 2),
(107, '2015-06-08 21:30:03', 'admin', 'ekusundzij1@etf.unsa.ba', 'adminski komentar', 2),
(108, '2015-06-08 21:30:13', 'admin', 'ekusundzij1@etf.unsa.ba', 'pravi', 2),
(109, '2015-06-08 23:07:18', 'admin', 'ekusundzij1@etf.unsa.ba', 'adminski', 3);

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `Username` varchar(20) COLLATE utf32_slovenian_ci NOT NULL,
  `Password` varchar(32) COLLATE utf32_slovenian_ci NOT NULL,
  `Email` text COLLATE utf32_slovenian_ci NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`Username`, `Password`, `Email`) VALUES
('elma', 'ee10ce913a468513cb7a75e83980b506', 'elma@etf.unsa.ba'),
('korisnik', '716b64c0f6bad9ac405aab3f00958dd1', 'ekusundzij1@etf.unsa.ba'),
('nedim', 'ac1fbc15be73fdcf2d2a36ad2bbc2c91', 'nedim@etf.unsa.ba');

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
(2, 'naslov', 'detaljniji tekst', 'naslov', 'autor', 'http://cdn.slike.hr/wp-content/uploads/sites/10/store/mali-zec-slika.jpg', '2015-05-12 00:00:00'),
(3, 'Naslov3', 'DuziTekst&lt;br /&gt;Dva&lt;br /&gt;Tri&lt;br /&gt;Cetiri', 'Naslov3', 'Elma', 'http://www2.shrani.si/files/slika006510177.jpg', '2015-05-08 00:00:00'),
(4, 'PROBNA NOVOST', 'NEKI TEKST NOVOSTI', 'NEKI DETALJNIJI TEKST NOVOSTI', 'Elma Kusundzija', '', '2015-06-08 01:48:16'),
(6, 'SDbvh', 'ojwfni', 'wjfnč', 'owjfn bu', '', '2015-06-03 00:00:00'),
(7, 'D VWČH', 'LLWdq vjhi', 'wojdb vuif', 'sjfbviu', '', '2015-06-29 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
