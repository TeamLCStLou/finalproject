-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2014 at 09:26 PM
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
  `spotlight` tinyint(1) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `siteLinks`
--

INSERT INTO `siteLinks` (`id`, `link_text`, `link_href`, `spotlight`, `created_on`) VALUES
(1, 'Launch Code', 'http://launchcodestl.com/', 0, '2014-04-15 01:08:23'),
(2, 'CS50X', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0CCkQFjAA&url=https%3A%2F%2Fwww.edx.org%2Fcourse%2Fharvardx%2Fharvardx-cs50x-introduction-computer-1022&ei=aYZMU-PGGOab2wXx_oHADg&usg=AFQjCNGqFtoNWLmIaQOFGbvRBNa4hoqYEw&sig2=JoqVaLVAg9rbCF4C80zkng&bvm=bv.64764171,d.b2I', 0, '2014-04-15 01:08:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
