-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 23, 2018 at 04:18 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wcr`
--

-- --------------------------------------------------------

--
-- Table structure for table `raild`
--

DROP TABLE IF EXISTS `raild`;
CREATE TABLE IF NOT EXISTS `raild` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `sname` varchar(30) NOT NULL,
  `rno` int(10) NOT NULL,
  `ac` int(3) NOT NULL,
  `bdate` varchar(12) NOT NULL,
  `edate` varchar(12) NOT NULL,
  `oidd` varchar(30) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `onum` varchar(20) NOT NULL,
  `ref` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raild`
--

INSERT INTO `raild` (`uid`, `sname`, `rno`, `ac`, `bdate`, `edate`, `oidd`, `oname`, `onum`, `ref`, `status`) VALUES
(1, 'bharatpur', 1, 1, '', '', '', '', '', '', '0'),
(2, 'bharatpur', 2, 1, '', '', '', '', '', '', '0'),
(3, 'bharatpur', 3, 1, '', '', '', '', '', '', '0'),
(4, 'bharatpur', 1, 0, '', '', '', '', '', '', '0'),
(5, 'bharatpur', 2, 0, '', '', '', '', '', '', '0'),
(6, 'bharatpur', 3, 0, '', '', '', '', '', '', '0'),
(7, 'bundi', 1, 1, '', '', '', '', '', '', '0'),
(8, 'bundi', 2, 1, '', '', '', '', '', '', '0'),
(9, 'bundi', 3, 1, '', '', '', '', '', '', '0'),
(10, 'bundi', 1, 0, '', '', '', '', '', '', '0'),
(11, 'bundi', 2, 0, '', '', '', '', '', '', '0'),
(12, 'bundi', 3, 0, '', '', '', '', '', '', '0'),
(13, 'gangapur', 1, 0, '', '', '', '', '', '', '0'),
(14, 'gangapur', 2, 0, '', '', '', '', '', '', '0'),
(15, 'gangapur', 3, 0, '', '', '', '', '', '', '0'),
(16, 'gangapur', 1, 1, '', '', '', '', '', '', '0'),
(17, 'gangapur', 2, 1, '', '', '', '', '', '', '0'),
(18, 'gangapur', 3, 1, '', '', '', '', '', '', '0'),
(19, 'kota', 1, 1, '', '', '', '', '', '', '0'),
(20, 'kota', 2, 1, '', '', '', '', '', '', '0'),
(21, 'kota', 3, 1, '', '', '', '', '', '', '0'),
(22, 'kota', 1, 0, '', '', '', '', '', '', '0'),
(23, 'kota', 2, 0, '', '', '', '', '', '', '0'),
(24, 'kota', 3, 0, '', '', '', '', '', '', '0'),
(25, 'mandalgarh', 1, 0, '', '', '', '', '', '', '0'),
(26, 'mandalgarh', 2, 0, '', '', '', '', '', '', '0'),
(27, 'mandalgarh', 1, 1, '', '', '', '', '', '', '0'),
(28, 'mandalgarh', 2, 1, '', '', '', '', '', '', '0'),
(29, 'sawaimadhopur', 1, 1, '', '', '', '', '', '', '0'),
(30, 'sawaimadhopur', 2, 1, '', '', '', '', '', '', '0'),
(31, 'sawaimadhopur', 3, 1, '', '', '', '', '', '', '0'),
(32, 'sawaimadhopur', 1, 0, '', '', '', '', '', '', '0'),
(33, 'sawaimadhopur', 2, 0, '', '', '', '', '', '', '0'),
(34, 'sawaimadhopur', 3, 0, '', '', '', '', '', '', '0'),
(35, 'shamgarh', 1, 1, '', '', '', '', '', '', '0'),
(36, 'shamgarh', 2, 1, '', '', '', '', '', '', '0'),
(37, 'shamgarh', 1, 0, '', '', '', '', '', '', '0'),
(38, 'shamgarh', 2, 0, '', '', '', '', '', '', '0'),
(39, 'thuklakabad', 1, 1, '', '', '', '', '', '', '0'),
(40, 'thuklakabad', 2, 1, '', '', '', '', '', '', '0'),
(41, 'thuklakabad', 3, 1, '', '', '', '', '', '', '0'),
(42, 'thuklakabad', 1, 0, '', '', '', '', '', '', '0'),
(43, 'thuklakabad', 2, 0, '', '', '', '', '', '', '0'),
(44, 'thuklakabad', 3, 0, '', '', '', '', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `house` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `id` varchar(20) NOT NULL,
  `post` varchar(30) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `in_date` varchar(15) NOT NULL,
  `out_date` varchar(15) NOT NULL,
  `days` int(3) NOT NULL,
  `rooms` int(3) NOT NULL,
  `type` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  `sn` int(10) NOT NULL AUTO_INCREMENT,
  `ref` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `activity` varchar(3) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
