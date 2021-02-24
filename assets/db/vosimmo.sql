-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2021 at 08:38 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vosimmo`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `sale_category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img_category` varchar(100) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

DROP TABLE IF EXISTS `msg`;
CREATE TABLE IF NOT EXISTS `msg` (
  `name_s` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`name_s`, `email`, `subject`, `message`, `id`) VALUES
('hobba', 'hobba@hobba.com', 'doks', 'jhbl', 23),
('sourour', 'kjhdblkqsb', 'sdblsdv', 'LBSDLKBSD', 22);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE IF NOT EXISTS `property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prix` float NOT NULL,
  `location` varchar(100) NOT NULL,
  `type` int(1) NOT NULL COMMENT '0:RENT 1:SALE 2:VACATION',
  `rate` int(5) NOT NULL,
  `etat` tinyint(1) NOT NULL COMMENT '0:Old 1:New',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `img`, `prix`, `location`, `type`, `rate`, `etat`) VALUES
(1, 'property-1', 250000, 'Nabeul, Kelibia', 1, 4, 1),
(2, 'property-2', 400000, 'Tunis,Lac', 1, 4, 1),
(3, 'property-3', 100, 'Nabeul, Manzeltmim', 0, 3, 0),
(4, 'property-4', 320000, 'Tunis,Ariana', 1, 3, 0),
(5, 'property-5', 500, 'Nabeul, Mrezgua', 2, 4, 1),
(6, 'property-6', 650000, 'Nabeul, Mrezgua', 1, 5, 1),
(7, 'property-7', 200000, 'Nabeul, Hamamet', 1, 3, 1),
(8, 'property-8', 320000, 'Nabeul, Hamamet', 1, 3, 0),
(9, 'property-9', 320000, 'Nabeul, Azmour', 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `phone`) VALUES
(1, 'rooda1998@gmail.com', '00000000', 'rooda1998@gmail.com', 53331981),
(19, 'RAED MOKNI', '00000000', 'demo@demo.com', 53331981),
(18, 'sourour', '55555555', 'sousou@gmail.com', 55555555),
(15, 'sourour', 'sourour', 'skdbkqsb', 61262),
(16, 'ahmed', 'ahmed', 'uaebfkjqbf', 0),
(17, 'majda', 'majda', 'sblsbd', 0),
(13, 'hobba', 'odnllqv', 'oadnond', 0),
(20, 'Sou', '2222', 'souroursaied@gmail.com', 22222222);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
