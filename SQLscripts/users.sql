-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2014 at 11:05 PM
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
  `Lecture_Loc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `City_Loc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Group_Name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ProgExp` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_on` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `usertype`, `FName`, `LName`, `Email`, `Phone`, `Lecture_Loc`, `City_Loc`, `Group_Name`, `ProgExp`, `created_on`) VALUES
(17, 'steve', '$1$7NA6AQA8$prDUyozv9eLoOp0o5lRsq/', NULL, 'Stephen', 'Smith', 'stephensmith378@gmail.com', '3148848061', 'Central Library', 'Downtown', 'matchCode', 'Novice', '2014-05-08 00:27:09.742330'),
(18, 'erin', '$1$o8uQ1eQc$C2DzN9b7HTrnTgoeQxJJ41', NULL, 'Erin', 'Smith', 'coogal@biggmail.com', '3148675309', 'Soldier''s Memorial', 'Downtown', 'matchCode', 'Advanced', '2014-05-08 00:27:35.465181'),
(20, 'erik', '$1$gm3K50aJ$WMgGZx./LRWchuECQ.D9j.', NULL, 'Erik', 'Schwenke', 'heyyo@youhoo.com', '3146492598', 'Central Library', 'Downtown', 'matchCode', 'Novice', '2014-05-08 02:24:29.099358'),
(21, 'ken', '$1$sVXAL0nQ$y/gY3KX8xjMfkx6rZCTmJ.', NULL, 'Ken', 'Harris', 'ae@rew.com', '1113332222', 'Soldier''s Memorial', 'Downtown', NULL, 'Novice', '2014-05-08 02:29:35.002819');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
