-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2014 at 07:27 PM
-- Server version: 5.5.32-MariaDB
-- PHP Version: 5.5.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matchCode`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `password` varchar(100) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `usertype` int(5) DEFAULT NULL,
  `FName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lecture_Loc` int(5) DEFAULT NULL,
  `City_Loc` int(5) DEFAULT NULL,
  `Group_ID` int(5) DEFAULT NULL,
  `ProgExp_ID` int(5) DEFAULT NULL,
  `Available` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `usertype`, `FName`, `LName`, `Email`, `Phone`, `Lecture_Loc`, `City_Loc`, `Group_ID`, `ProgExp_ID`, `Available`, `created_on`) VALUES
(1, 'ssmith', '12345', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-03-29 05:12:38.000000'),
(2, 'Erik', '12345', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-03-29 05:34:10.000000'),
(3, 'Erin', '12345', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-03-29 05:34:10.000000'),
(4, 'Steve', '12345', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-03-29 05:34:27.000000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
