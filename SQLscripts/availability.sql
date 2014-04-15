-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2014 at 08:07 PM
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
-- Table structure for table `availability`
--

DROP TABLE IF EXISTS `availability`;
CREATE TABLE IF NOT EXISTS `availability` (
  `user_id` int(10) NOT NULL,
  `availability` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` timestamp(2) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
