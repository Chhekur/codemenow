-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql203.unaux.com
-- Generation Time: Jun 09, 2018 at 03:02 AM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unaux_20288636_codemenow`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `notifications` text NOT NULL,
  `review` text NOT NULL,
  `facebooklink` text NOT NULL,
  `twitterlink` text NOT NULL,
  `instagramlink` text NOT NULL,
  `youtubelink` text NOT NULL,
  `googlepluslink` text NOT NULL,
  `c` int(11) NOT NULL,
  `cplusplus` int(4) NOT NULL,
  `javascript` int(4) NOT NULL,
  `python` int(4) NOT NULL,
  `ruby` int(4) NOT NULL,
  `htmlcss` int(4) NOT NULL,
  `sqlite` int(4) NOT NULL,
  `perl` int(4) NOT NULL,
  `terminal` int(4) NOT NULL,
  `php` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users`
--
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
