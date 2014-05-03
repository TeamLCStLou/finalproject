-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2014 at 01:01 AM
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
-- Table structure for table `siteLinks`
--

DROP TABLE IF EXISTS `siteLinks`;
CREATE TABLE IF NOT EXISTS `siteLinks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `link_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'link',
  `link_href` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(10) NOT NULL,
  `spotlight` tinyint(1) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `siteLinks`
--

INSERT INTO `siteLinks` (`id`, `link_text`, `link_href`, `order`, `spotlight`, `created_on`) VALUES
(1, 'Launch Code', 'http://launchcodestl.com/', 2, 0, '2014-04-15 01:08:23'),
(2, 'CS50X', 'https://courses.edx.org/courses/HarvardX/CS50x/2014_T1/', 1, 0, '2014-04-15 01:08:23'),
(3, 'Launch Code CS50 Reddit', 'http://www.reddit.com/r/LaunchCodeCS50x/', 3, 0, '2014-04-29 04:54:56'),
(6, 'LaunchCode Syllabus', 'http://imgur.com/a/zQYZB', 4, 0, '2014-04-29 05:03:19'),
(7, 'LaunchCode TV', 'http://tv.launchcode.us/ ', 6, 0, '2014-05-03 04:55:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
