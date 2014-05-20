-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2014 at 11:40 PM
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
-- Table structure for table `site_announcements`
--

DROP TABLE IF EXISTS `site_announcements`;
CREATE TABLE IF NOT EXISTS `site_announcements` (
  `announcements_number` int(10) NOT NULL AUTO_INCREMENT,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(10) NOT NULL,
  `start_display` datetime DEFAULT NULL COMMENT 'can limit when message is first displayed',
  `end_display` datetime DEFAULT NULL COMMENT 'can limit when message is displayed until',
  `created_on` timestamp(1) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`announcements_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `site_announcements`
--

INSERT INTO `site_announcements` (`announcements_number`, `message`, `display`, `order`, `start_display`, `end_display`, `created_on`) VALUES
(1, 'This is our first test message', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-05-20 01:04:00.0'),
(2, 'This is our second message. We are happy to let you know that we will have class this Wed night and Jim will join us yet again.  How cool!', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-05-20 01:04:00.0'),
(3, 'This is a hidden message', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-05-20 01:04:21.0'),
(4, 'This is a hidden message', 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-05-20 01:04:21.0'),
(5, 'This is a copy of the second message. We are happy to let you know that we will have class this Wed night and Jim will join us yet again.  How cool!', 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-05-20 01:04:00.0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
