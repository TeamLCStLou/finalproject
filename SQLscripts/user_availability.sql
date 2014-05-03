-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2014 at 09:53 PM
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
-- Table structure for table `Availability`
--

DROP TABLE IF EXISTS `Availability`;
CREATE TABLE IF NOT EXISTS `Availability` (
  `Avail_ID` int(2) NOT NULL AUTO_INCREMENT,
  `Time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Order` int(2) NOT NULL,
  PRIMARY KEY (`Time`),
  UNIQUE KEY `Avail_ID` (`Avail_ID`),
  KEY `Order` (`Order`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `Availability`
--

INSERT INTO `Availability` (`Avail_ID`, `Time`, `Order`) VALUES
(2, 'Afternoon', 2),
(3, 'Evening', 3),
(1, 'Morning', 1),
(4, 'Weekdays', 4),
(5, 'Weekends', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
