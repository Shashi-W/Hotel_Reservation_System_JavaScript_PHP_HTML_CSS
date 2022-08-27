-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 07, 2021 at 05:07 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(9, 'ghh', 'sandunis@horizoncampus.edu.lk', 'jj', 'hj'),
(10, 'wwww', 'sandunis@horizoncampus.edu.lk', 'wwwww', 'wwwww'),
(11, 'www', 'sandunis@horizoncampus.edu.lk', 'qqdda', 'adadadad'),
(12, 'www', 'sandunis@horizoncampus.edu.lk', 'qqdda', 'adadadad'),
(13, 'ddd', 'sandunis@horizoncampus.edu.lk', 'dzdad', 'adadada'),
(14, 'ddd', 'sandunis@horizoncampus.edu.lk', 'dzdad', 'adadada'),
(15, 'w', 'sandunis@horizoncampus.edu.lk', '3', 'kk'),
(16, 'eee', 'sandunis@horizoncampus.edu.lk', 'ffkloi', 'lki'),
(17, 'w', 'sandunis@horizoncampus.edu.lk', 'ff', 'hgfb'),
(18, 'w', 'sandunis@horizoncampus.edu.lk', 'ff', 'hgfb'),
(19, 'aaa', 'sandunis@horizoncampus.edu.lk', 'aaa', 'aaaa'),
(20, 'bb', 'sandunis@horizoncampus.edu.lk', 'bb', 'bbbb'),
(21, 'cc', 'sandunis@horizoncampus.edu.lk', 'ccc', 'ccccc'),
(22, 'ww', 'sandunis@horizoncampus.edu.lk', 'ee', 'ee'),
(23, 'ww', 'sandunis@horizoncampus.edu.lk', 'ee', 'ee'),
(24, 'ghh', 'sandunis@horizoncampus.edu.lk', '3', 'jkkk'),
(25, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(26, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(27, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(28, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(29, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(30, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(31, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(32, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(33, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(34, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(35, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(36, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(37, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(38, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(39, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(40, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'jk'),
(41, 'ghh', 'sandunis@horizoncampus.edu.lk', '', 'hj'),
(42, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'bnh'),
(43, 'ghh', 'sandunis@horizoncampus.edu.lk', 'eeejhfhj', 'bjm '),
(44, 'ghh', 'sandunis@horizoncampus.edu.lkhj', 'ooo', 'pppp'),
(45, 'shashi', 'sandunis@horizoncampus.edu.lk', 'ii', 'iiiii'),
(46, 'ghh', 'sandunis@horizoncampus.edu.lk', '', 'jk'),
(47, 'ghh', 'sandunis@horizoncampus.edu.lk', '', 'nji'),
(48, 'ghh', 'sandunis@horizoncampus.edu.lk', 'ff', 'nj'),
(49, 'ytn', 'sandunis@horizoncampus.edu.lk', 'final project', 'yuyyhbbb'),
(50, 'gamya', 'sandunis@horizoncampus.edu.lk', 'yyy', 'rtywb'),
(51, 'chathuri', 'sandunis@horizoncampus.edu.lk', 'eee', 'rrrrr');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`) VALUES
(1, 'rd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, '', '12345'),
(2, 'shashi', '11111'),
(3, 'shashi', '11111'),
(4, 'sanduni', '22222'),
(5, 'wijendra', '11111'),
(6, 'qqq', '111'),
(7, 'aaa', '1234'),
(8, 'uuu', '4567'),
(9, 'yy', '4567'),
(10, 'oo', '9090'),
(11, 'wijendra', '5678'),
(12, 'parami', '1234'),
(13, 'kalani', '45678');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

DROP TABLE IF EXISTS `roombook`;
CREATE TABLE IF NOT EXISTS `roombook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `dated` date NOT NULL,
  `guest` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `date`, `dated`, `guest`) VALUES
(1, '2021-03-02', '0000-00-00', ''),
(2, '2021-03-02', '0000-00-00', ''),
(3, '2021-03-02', '0000-00-00', ''),
(4, '2021-03-02', '0000-00-00', ''),
(5, '2021-03-02', '0000-00-00', ''),
(6, '2021-03-02', '0000-00-00', 'one'),
(7, '2021-03-02', '0000-00-00', 'three'),
(8, '2021-03-02', '0000-00-00', ''),
(9, '2021-03-02', '0000-00-00', 'four'),
(10, '2021-03-02', '2021-03-03', 'two'),
(11, '2021-03-02', '2021-03-03', 'two'),
(12, '2021-03-02', '2021-03-03', 'two'),
(13, '2021-03-02', '2021-03-03', 'two'),
(14, '2021-03-02', '2021-03-03', 'two'),
(15, '2021-03-02', '2021-03-03', 'two'),
(16, '2021-03-02', '2021-03-03', 'two'),
(17, '2021-03-02', '2021-03-03', 'two'),
(18, '2021-03-02', '2021-03-03', 'two'),
(19, '2021-03-02', '2021-03-03', 'two'),
(20, '2021-03-02', '2021-03-03', 'two'),
(21, '2021-03-02', '2021-03-03', 'two'),
(22, '2021-03-02', '2021-03-03', 'two'),
(23, '2021-03-02', '2021-04-01', 'two'),
(24, '2021-03-02', '2021-04-01', 'two'),
(25, '2021-03-02', '2021-04-01', 'two'),
(26, '2021-03-02', '2021-04-01', 'two'),
(27, '2021-03-02', '2021-04-01', 'two'),
(28, '2021-03-02', '2021-04-01', 'two'),
(29, '2021-03-02', '2021-03-11', 'one'),
(30, '2021-03-02', '2021-03-11', 'one'),
(31, '2021-03-02', '2021-03-11', 'one'),
(32, '2021-03-02', '2021-03-11', 'one'),
(33, '2021-03-02', '2021-03-03', 'one'),
(34, '2021-03-02', '2021-03-03', 'three'),
(35, '2021-03-02', '2021-03-03', 'three'),
(36, '2021-03-02', '2021-03-03', 'two'),
(37, '2021-03-02', '2021-03-03', 'one'),
(38, '2021-03-02', '2021-03-03', 'one'),
(39, '2021-03-03', '2021-03-27', 'two'),
(40, '2021-03-03', '2021-03-04', 'two'),
(41, '2021-03-03', '2021-03-26', 'one'),
(42, '2021-03-03', '2021-03-26', 'one'),
(43, '2021-03-05', '2021-03-13', 'one'),
(44, '2021-03-06', '2021-03-06', 'three'),
(45, '2021-03-06', '2021-03-06', 'three'),
(46, '2021-03-06', '2021-03-06', 'one'),
(47, '2021-03-06', '2021-03-06', 'two'),
(48, '2021-03-07', '2021-03-08', 'one'),
(49, '2021-03-08', '2021-03-10', 'two'),
(50, '2021-03-08', '2021-03-10', 'four'),
(51, '2021-03-10', '2021-03-11', 'three'),
(52, '2021-03-07', '2021-03-08', 'two'),
(53, '2021-03-09', '2021-03-10', 'one');

-- --------------------------------------------------------

--
-- Table structure for table `roomprice`
--

DROP TABLE IF EXISTS `roomprice`;
CREATE TABLE IF NOT EXISTS `roomprice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `roomprice`
--

INSERT INTO `roomprice` (`id`, `price`) VALUES
(1, 'From LKR 29,139 Average Per Night');

-- --------------------------------------------------------

--
-- Table structure for table `weddingbook`
--

DROP TABLE IF EXISTS `weddingbook`;
CREATE TABLE IF NOT EXISTS `weddingbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `event` varchar(50) NOT NULL,
  `startd` date NOT NULL,
  `endd` date NOT NULL,
  `Attendees` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `weddingbook`
--

INSERT INTO `weddingbook` (`id`, `sname`, `fname`, `email`, `address`, `country`, `event`, `startd`, `endd`, `Attendees`) VALUES
(1, 'g', 'g', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-27', '2021-03-27', 800),
(2, 'g', 'g', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-27', '2021-03-27', 800),
(3, 'g', 'g', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-27', '2021-03-27', 800),
(4, 'g', 'g', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-27', '2021-03-27', 800),
(5, 'g', 'g', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-27', '2021-03-27', 800),
(6, 'g', 'g', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-27', '2021-03-27', 800),
(7, 'g', 'g', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-27', '2021-03-27', 800),
(8, 'g', 'g', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-27', '2021-03-27', 800),
(9, 'g', 'g', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-27', '2021-03-27', 800),
(10, 'g', 'g', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-27', '2021-03-27', 800),
(11, 'g', 'g', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-27', '2021-03-27', 800),
(12, 'g', 'g', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-27', '2021-03-27', 800),
(13, 'g', 'g', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-27', '2021-03-27', 800),
(14, 'g', 'g', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-27', '2021-03-27', 800),
(15, 'g', 'g', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-27', '2021-03-27', 800),
(16, 'wijendra', 'shashi', 'sandunis@horizoncampus.edu.lk', 'ww', 'lanka', 'wedding', '2021-03-03', '2021-03-03', 700),
(17, 'ab', 'shashi', 'sandunis@horizoncampus.edu.lk', 'hh', 'other', 'wedding', '2021-03-04', '2021-03-04', 800),
(18, 'g', 'nnn', 'sandunis@horizoncampus.edu.lk', 'ww', 'lanka', 'wedding', '2021-03-06', '2021-04-10', 30),
(19, 'ee', 'nnn', 'sandunis@horizoncampus.edu.lk', 'ww', 'India', 'wedding', '2021-03-06', '2021-03-06', 30),
(20, 'ee', 'nnn', 'sandunis@horizoncampus.edu.lk', 'ww', 'Australia', 'wedding', '2021-03-06', '2021-03-06', 89),
(21, 'g', 'nnn', 'sandunis@horizoncampus.edu.lk', 'hh', 'Australia', 'wedding', '2021-03-27', '2021-03-27', 800),
(22, 'ruwani', 'shasi', 'sandunis@horizoncampus.edu.lk', 'hh', 'lanka', 'wedding', '2021-03-07', '2021-03-08', 500),
(23, 'kalum', 'priyankara', 'sandunis@horizoncampus.edu.lk', 'ww', 'lanka', 'wedding', '2021-03-10', '2021-03-10', 400);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id`) REFERENCES `weddingbook` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
