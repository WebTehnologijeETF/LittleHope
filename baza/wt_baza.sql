-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2015 at 08:02 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci AUTO_INCREMENT=119 ;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`Id`, `Datum`, `Autor`, `Email`, `Tekst`, `Novost`) VALUES
(115, '2015-06-17 17:39:19', 'dalila', 'dalila@hotmail.com', 'jako bi nam znacilo', 14),
(116, '2015-06-17 17:40:04', 'WE', 'WE@hotmail.com', 'sretni smo da mozemo pomoci', 14),
(117, '2015-06-17 17:40:45', 'etf', 'etf@etf.unsa.ba', 'javi nam se na mail \netf@etf.unsa.ba', 16),
(118, '2015-06-17 17:41:18', 'elvis', '', 'Znam djevojku, divna je :)', 16);

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
  `kategorija` text COLLATE utf32_slovenian_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf32 COLLATE=utf32_slovenian_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `novosti`
--

INSERT INTO `novosti` (`Id`, `Naslov`, `Tekst`, `DetaljnijiTekst`, `Autor`, `Slika`, `Datum`, `kategorija`) VALUES
(14, 'European Championships in Karate', 'Olmpik Club raises funds for travel to the European Championships in Karate.', 'Olmpik Club raises funds for travel to the European Championships in Karate.\r\nOlmpik Club raises funds for travel to the European Championships in Karate.\r\nOlmpik Club raises funds for travel to the European Championships in Karate.', 'Elma Kusundzija', 'http://web.ics.purdue.edu/~karate/karate/images/stories/demo/karate/karatelogo.jpg', '2015-06-01 00:00:00', 'education_competition'),
(16, 'Adna need our help', 'Due to the difficult financial situation in the family Milic, Adna need help to continue education.', 'Due to the difficult financial situation in the family Milic, Adna need help to continue education.\r\nDue to the difficult financial situation in the family Milic, Adna need help to continue education.\r\nDue to the difficult financial situation in the family Milic, Adna need help to continue education.', 'Nedim Kusundžija', 'http://images.townnews.com/cnweekly.com/content/articles/2011/04/09/news/doc4d9b7afa3ab029549639641.jpg', '2015-06-06 00:00:00', 'education_scholarship'),
(17, 'Cappadocia Balloon Tour for Azra', 'Azra''s wish in life is to fly a balloon. Lets enable her a Cappadocia Balloon Tour!', 'Azra''s wish in life is to fly a balloon. Lets enable her a Cappadocia Balloon Tour!\r\nAzra''s wish in life is to fly a balloon. Lets enable her a Cappadocia Balloon Tour!\r\nAzra''s wish in life is to fly a balloon. Lets enable her a Cappadocia Balloon Tour!', 'Fatima Kušundžija', 'http://media-cdn.tripadvisor.com/media/photo-s/04/ba/f3/da/goreme.jpg', '2015-05-19 00:00:00', 'wishes_travel'),
(19, 'European Championships in Karate (senior)', 'Olmpik Club raises funds for travel to the European Championships in Karate.', 'Olmpik Club raises funds for travel to the European Championships in Karate.\r\nOlmpik Club raises funds for travel to the European Championships in Karate.\r\nOlmpik Club raises funds for travel to the European Championships in Karate.', 'Elma Kusundžija', 'http://web.ics.purdue.edu/~karate/karate/images/stories/demo/karate/karatelogo.jpg', '2014-07-09 00:00:00', 'sport_competitions'),
(20, 'European Chess Tournament', 'Olmpik Club raises funds for travel to the European Chess Tournament.', 'Olmpik Club raises funds for travel to the European Chess Tournament.\r\nOlmpik Club raises funds for travel to the European Chess Tournament.\r\nOlmpik Club raises funds for travel to the European Chess Tournament.', 'Elma Kusundžija', 'http://img2.wikia.nocookie.net/__cb20100630175158/yugioh/images/d/d9/Opening_chess_position_from_black_side.jpg', '2015-01-06 00:00:00', 'sport_tournaments'),
(21, 'Nenad need help', 'Nenad was in March this year revealed acute lymphocytic leukemia, and needs as soon as possible on the operation in Turkey.', 'Nenad was in March this year revealed acute lymphocytic leukemia, and needs as soon as possible on the operation in Turkey.\r\nNenad was in March this year revealed acute lymphocytic leukemia, and needs as soon as possible on the operation in Turkey.', 'Adis Hamzic', 'http://www.publicdomainpictures.net/pictures/30000/nahled/little-boy.jpg', '2015-06-02 00:00:00', 'medical_surgery'),
(22, 'Halid need help', 'In March this year Halid was diagnosed to have diabetes, and needs as soon as possible money for medicines.', 'In March this year Halid was diagnosed to have diabetes, and needs as soon as possible money for medicines.\r\nIn March this year Halid was diagnosed to have diabetes, and needs as soon as possible money for medicines.\r\n', 'Adis Hamzic', 'https://s-media-cache-ak0.pinimg.com/236x/37/98/d9/3798d9cda1eb64339fdae48428e43593.jpg', '2015-06-02 00:00:00', 'medical_treatment'),
(23, 'Paris ''Home for Orphans''', 'These children really need your help. ', '''Home for Orphans'' Moskva is institution for abandoned children. These children really need your help.\r\nThese children really need your help. ', 'Ilvana Branković', 'http://realonlinesurveys.com/wp-content/uploads/2015/02/small-kids-483594.jpg', '2015-04-13 00:00:00', 'charity');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
