-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2018 at 06:23 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

DROP TABLE IF EXISTS `choice`;
CREATE TABLE IF NOT EXISTS `choice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_num` int(11) NOT NULL,
  `correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `question_num` int(11) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`question_num`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `uname` varchar(256) NOT NULL,
  `emailadd` varchar(256) NOT NULL,
  `gender` varchar(256) NOT NULL,
  `birthday` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `repass` varchar(256) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `uname`, `emailadd`, `gender`, `birthday`, `pass`, `repass`) VALUES
(3, 'Jhaylord', 'Viray', 'jay', '2163058@slu.edu.ph', 'male', '2018-05-05', '$2y$10$TsjJm40sPFUaMvpDo.wwFu8QPkIo9jt7ImI2CQtiSkVE0ATjgGhHe', '$2y$10$QOKQQXh/sdbafh/Z7lFRAedEe6VPdXvXw6TN4igL7ojl0HLzCSFpu'),
(4, 'aaa', 'aaa', 'aaa', '12121@gmail.com', 'female', '2018-05-03', '$2y$10$xDOw4hRqvS9eODMafylafue7ijc2P5GKZoE1E891ZlyA.TG3juOQS', '$2y$10$VRlBHtV4WeBAoCgkC5fVCOLZyj9unEelCRJpRm/ba8Lz3PLj2Cy/C'),
(5, 'aaa', 'aaa', 'zxc', 'aaa@yahoo.com', 'male', '2018-05-02', '$2y$10$535vzHVcQhQinAAjZSIBherunPoZk3yEZwxtUrpsc7DALmfeZJ3t6', '$2y$10$CaW6z8VCXsqkYo6svbdnh.dWKSInl0GHzSEScTTFdNZfRbdCpqHTy'),
(6, 'Test', 'Test', 'test', 'Test@gmail.com', 'male', '2018-05-01', '$2y$10$vmELS46qDhXfhrYIsg5Q8eRktCbgSb2k/QTPgrssBKCgiP89AANdO', '$2y$10$HYxfj7WaHux2K1xA4lhIku/jpD87tJRAD8MDWvtEVbIO/QC0SXzhi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
