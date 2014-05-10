-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2014 at 11:48 PM
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
-- Table structure for table `prog_status`
--

DROP TABLE IF EXISTS `prog_status`;
CREATE TABLE IF NOT EXISTS `prog_status` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `status_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `img_link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `status_code` (`status_code`),
  KEY `status_code_2` (`status_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `prog_status`
--

INSERT INTO `prog_status` (`id`, `status_code`, `status`, `order`, `img_link`) VALUES
(1, 'NS', 'Not Started', 0, '../images/icons/not-started.svg'),
(2, 'COOL', 'I''m Cool', 5, '../images/icons/hot-pink.svg'),
(3, 'DONE', 'Done', 99, '../images/icons/done-green.svg'),
(4, 'SH', 'Send Help', 10, './images/icons/help-pink.svg'),
(5, 'DG', 'Doing Good', 50, '../images/icons/happy_times-pink.svg'),
(6, 'CRAY', 'Gone a bit mad', 75, '../images/icons/AbitNuts-pink.svg'),
(7, 'EXP', 'Just experimenting', 60, '../images/icons/experimenting-pink.svg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
