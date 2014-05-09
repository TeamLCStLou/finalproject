-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2014 at 11:04 PM
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
-- Table structure for table `user_prog_status`
--

DROP TABLE IF EXISTS `user_prog_status`;
CREATE TABLE IF NOT EXISTS `user_prog_status` (
  `user_id` int(10) NOT NULL,
  `pset` int(2) NOT NULL,
  `status_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `user_id` (`user_id`,`pset`,`status_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_prog_status`
--

INSERT INTO `user_prog_status` (`user_id`, `pset`, `status_code`, `created_on`) VALUES
(17, 4, 'DONE', '2014-05-09 01:43:21.00'),
(17, 9, 'CRAY', '2014-05-09 01:12:03.00'),
(18, 0, 'DONE', '2014-05-09 02:45:44.00'),
(18, 2, 'EXP', '2014-05-09 01:12:03.00'),
(18, 4, 'DONE', '2014-05-09 01:43:21.00'),
(18, 7, 'SH', '2014-05-09 01:12:03.00'),
(18, 9, 'CRAY', '2014-05-09 01:12:03.00'),
(20, 0, 'DONE', '2014-05-09 02:45:44.00'),
(20, 2, 'EXP', '2014-05-09 01:12:03.00'),
(20, 9, 'CRAY', '2014-05-09 01:12:03.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
