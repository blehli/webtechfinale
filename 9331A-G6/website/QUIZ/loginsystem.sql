-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 06:26 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `Is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `Is_correct`, `text`) VALUES
(1, 1, 1, 'Hypertext PreProcessor'),
(2, 1, 0, 'Hypertext Postprocessor'),
(3, 1, 0, 'Philippines'),
(6, 2, 1, '19'),
(7, 2, 0, '17'),
(8, 2, 0, '16'),
(9, 3, 0, 'A'),
(10, 3, 0, 'B'),
(11, 3, 1, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'PHP ?'),
(2, 'What is my age?'),
(3, 'What is my last name?');

-- --------------------------------------------------------

--
-- Table structure for table `quiztype`
--

CREATE TABLE `quiztype` (
  `quiznum` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(256) CHARACTER SET latin1 NOT NULL,
  `lname` varchar(256) CHARACTER SET latin1 NOT NULL,
  `uname` varchar(256) CHARACTER SET latin1 NOT NULL,
  `emailadd` varchar(256) CHARACTER SET latin1 NOT NULL,
  `birthday` varchar(256) CHARACTER SET latin1 NOT NULL,
  `pass` varchar(256) CHARACTER SET latin1 NOT NULL,
  `repass` varchar(256) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `uname`, `emailadd`, `birthday`, `pass`, `repass`) VALUES
(3, 'Jhaylord', 'Viray', 'jay', '2163058@slu.edu.ph', '2018-05-05', '$2y$10$TsjJm40sPFUaMvpDo.wwFu8QPkIo9jt7ImI2CQtiSkVE0ATjgGhHe', '$2y$10$QOKQQXh/sdbafh/Z7lFRAedEe6VPdXvXw6TN4igL7ojl0HLzCSFpu'),
(4, 'aaa', 'aaa', 'aaa', '12121@gmail.com', '2018-05-03', '$2y$10$xDOw4hRqvS9eODMafylafue7ijc2P5GKZoE1E891ZlyA.TG3juOQS', '$2y$10$VRlBHtV4WeBAoCgkC5fVCOLZyj9unEelCRJpRm/ba8Lz3PLj2Cy/C'),
(5, 'aaa', 'aaa', 'zxc', 'aaa@yahoo.com', '2018-05-02', '$2y$10$535vzHVcQhQinAAjZSIBherunPoZk3yEZwxtUrpsc7DALmfeZJ3t6', '$2y$10$CaW6z8VCXsqkYo6svbdnh.dWKSInl0GHzSEScTTFdNZfRbdCpqHTy'),
(6, 'Test', 'Test', 'test', 'Test@gmail.com', '2018-05-01', '$2y$10$vmELS46qDhXfhrYIsg5Q8eRktCbgSb2k/QTPgrssBKCgiP89AANdO', '$2y$10$HYxfj7WaHux2K1xA4lhIku/jpD87tJRAD8MDWvtEVbIO/QC0SXzhi'),
(8, 'Delfin', 'Cachin', 'delfin', 'delfin@gmail.com', '1998-03-01', '$2y$10$55qDNgdfAyXjxl97kfkrE.yONWNYBtuR8PAcehLY5myA837rwycb2', '$2y$10$yo2jA2t75QoL5W3XDlHz.OR1glOdKnXmPxTNjvxcAh0LNGoe3Il4S'),
(9, 'Blessly', 'Carbonell', 'blehli', 'blesslycarbonell@gmail.com', '1998-09-06', '$2y$10$RwL/FzEP6.vY7x3CW87Vxu2qLjxXwLM6CwOJ/0bViGYtxkbXQvjlG', '$2y$10$HqenK06e1h8eqcTmamEqt.FQVxlUp0exnWFsg5IsZQve3lqEucMii'),
(10, 'aewaeaw', 'aweaewa', 'asd', 'asdadsa@gmail.com', '2018-05-16', '$2y$10$MfjCV44xvMCSY2pH2kp4buUjw7Ldvnai3kCPi2dYm78RiML9JMlMC', '$2y$10$K1ZBW1WGnJw/iWW9ue8XqemVAbyUr.n7lpAYZrB6gbOF6RdyHEt/a');

-- --------------------------------------------------------

--
-- Table structure for table `user_quiz`
--

CREATE TABLE `user_quiz` (
  `user_id` int(11) NOT NULL,
  `quiznum` int(11) NOT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `quiztype`
--
ALTER TABLE `quiztype`
  ADD PRIMARY KEY (`quiznum`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_quiz`
--
ALTER TABLE `user_quiz`
  ADD PRIMARY KEY (`user_id`,`quiznum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `quiztype`
--
ALTER TABLE `quiztype`
  MODIFY `quiznum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
