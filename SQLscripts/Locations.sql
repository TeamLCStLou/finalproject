-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2014 at 08:04 PM
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
-- Table structure for table `Locations`
--

DROP TABLE IF EXISTS `Locations`;
CREATE TABLE IF NOT EXISTS `Locations` (
  `Location_ID` int(3) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Relative_Location` int(3) NOT NULL,
  PRIMARY KEY (`Location_ID`),
  UNIQUE KEY `Name` (`Name`),
  KEY `Relative_Location` (`Relative_Location`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Locations`
--

INSERT INTO `Locations` (`Location_ID`, `Name`, `Relative_Location`) VALUES
(1, 'Downtown', 0),
(2, 'Metro East', 1),
(3, 'Jefferson County', 3),
(4, 'Midtown', 1),
(5, 'North County', 2),
(6, 'South County', 2),
(7, 'Saint Charles', 4),
(8, 'West County', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
