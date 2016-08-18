-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 17, 2016 at 08:46 PM
-- Server version: 5.6.31
-- PHP Version: 5.6.20


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `saikatha_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `firstname`, `lastname`) VALUES
(8, 'Bob', 'Boob'),
(2, 'Tim', 'Thomas'),
(5, 'wsw', 'qwqw'),
(6, 'hello', 'sir'),
(7, 'hello', ' ddear'),
(9, 'new ', 'reco'),
(10, 'gg', 'ij'),
(11, 'ehe', 'euhe'),
(12, 'hello', 'bro'),
(13, 'sjh', 'jb'),
(14, 'sjh', 'jb'),
(15, 'sjh', 'jb'),
(16, 'ss', 'sfs'),
(17, 'ss', 'sfs'),
(18, 'ss', 'sfs'),
(19, 'ss', 'sfs'),
(20, 'ss', 'sfs'),
(21, 'ss', 'ss'),
(22, 'ss', 'ss'),
(23, 'ss', 'ss'),
(24, 'hello', 'sir'),
(25, 'arabinda ', 'Manna'),
(26, 'arabinda ', 'Manna'),
(27, 'aro..', 'dekh'),
(28, 'Abc', 'Abc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
