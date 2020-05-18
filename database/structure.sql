-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2019 at 03:41 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datiing`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'primary id',
  `first` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'firstname',
  `last` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'lastname',
  `email` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT 'email ID',
  `password1` varchar(15) CHARACTER SET utf8 NOT NULL COMMENT 'original password',
  `password2` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT 'confirm password',
  `phone` int(15) NOT NULL COMMENT 'phone number',
  `month` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT 'month of birth',
  `day` int(2) NOT NULL COMMENT 'day of birth',
  `year` int(4) NOT NULL COMMENT 'year of birth',
  `me` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT 'gender of person',
  `seeking` varchar(15) CHARACTER SET utf8 NOT NULL COMMENT 'gender of partner',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first`, `last`, `email`, `password1`, `password2`, `phone`, `month`, `day`, `year`, `me`, `seeking`) VALUES
(1, 'shjkl', 'dfghj', 'dfghj@gmail.com', '2020', '2020', 475445, 'Feb', 20, 2001, 'fghjk,', 'vm'),
(2, 'abc', 'abc', 'abc@gmail.com', '123', '123', 123, 'Jan', 1, 1986, 'jhvadb ', 'jkevabdnc'),
(3, 's', 'k', 'gh@gmail.com', '111', '111', 485, 'Jan', 17, 2000, 'dfgsdfgh', 'efg'),
(4, 'sharn', 'samra', 'shano@gmail.com', '2020', '2020', 556555, 'April', 18, 1998, 'female', 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
