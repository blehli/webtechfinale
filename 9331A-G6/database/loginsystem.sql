-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 08:56 AM
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
-- Table structure for table `choice`
--

CREATE TABLE `choice` (
  `quiz_num` int(11) NOT NULL,
  `question_num` int(11) NOT NULL,
  `iscorrect` tinyint(1) NOT NULL DEFAULT '0',
  `choice_value` text NOT NULL,
  `choiceid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`quiz_num`, `question_num`, `iscorrect`, `choice_value`, `choiceid`) VALUES
(1, 1, 0, 'Java Servlet Pages', 1),
(1, 1, 1, 'Java Server Pages', 2),
(1, 1, 0, 'Java Server Programming', 3),
(1, 1, 0, 'Java Servlet Programming', 4),
(2, 2, 1, 'Hypertext Preprocessor', 5),
(2, 2, 0, 'Pre-hypertext processor', 6),
(2, 2, 0, 'Hypertext Programming', 7),
(2, 2, 0, 'Progamming in Hypertext Processor', 8);

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
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_num` int(11) NOT NULL,
  `quiznum` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_num`, `quiznum`, `question`, `answer`) VALUES
(1, 2, 'What does PHP stands for?', 'Hypertext Processor'),
(2, 2, 'Between which tags is PHP code written', '<?php, ?>'),
(3, 2, 'Which of the following is used to declare a constant', 'define	'),
(4, 2, ' Which of the following is NOT a valid PHP comparison operator?\r\n<=>	', '<=>	'),
(5, 2, 'What is the strpos() function used for?', 'Search for character within a string	'),
(6, 2, 'What is the difference between GET and POST method?', 'GET displays the form values entered in the URL of the address bar where as POST does not.'),
(7, 2, 'function in PHP Returns a list of response headers sent', 'headers_list()	\r\n'),
(8, 2, 'What is array_keys() used for?', 'Returns all the keys of an array'),
(9, 2, ' What is the purpose of $_SESSION[]?', ' Used to store variables of the current session'),
(10, 2, 'Variables always start with a ___ in PHP', '$\r\n'),
(11, 2, 'PHP is an open source software', 'True'),
(12, 2, 'PHP runs on different platforms (Windows, Linux, Unix, etc.)', 'True'),
(13, 2, 'What is the operater for comparing two values in PHP?', '==='),
(14, 2, 'What function computes the difference of arrays?', 'array_diff();'),
(15, 2, 'What are the paremeters in the function mysql_connect()?', 'Servername,database username, database password, database name'),
(16, 6, '\r\nIt  occurs when there is an untrusted data which is sent \r\nas a part of a command or query', 'Injecton'),
(17, 6, 'Bank account informations, health information, personal informations\r\nare example of what?Sensitive Datas', 'Sensitive Datas'),
(18, 6, 'What does XXE stands for ?', 'XML External Entities'),
(19, 6, 'What does XSS stands for?', 'Cross Site Scripting'),
(20, 6, 'The process of converting serialized data coming from a file or stream into an object', ''),
(21, 6, 'Some components are vulnerable when they are not update. What Vulnerability is this?', 'Using Components with Known Vulnerabilities'),
(22, 6, 'what does DoS stands for?', 'Denial of Service'),
(23, 6, 'what does DDoS stands for?', 'Distributed Denial of Service'),
(24, 6, 'When hackers gain control of sensitive datas, they can use it to steal informations. what vulnerability is this?', 'SENSITIVE DATA EXPOSURE'),
(25, 6, 'An application compiles a list of malicious inputs then verifies the external input from a given list of malicious inputs. what type of validating the input is mentioned?', 'Blacklisting');

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

--
-- Dumping data for table `quiztype`
--

INSERT INTO `quiztype` (`quiznum`, `type`) VALUES
(1, 'Java'),
(2, 'PHP'),
(3, 'Node.js'),
(4, 'ASP.net'),
(5, 'Ruby'),
(6, 'Security');

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
(9, 'Blessly', 'Carbonell', 'blehli', 'blesslycarbonell@gmail.com', '1998-09-06', '$2y$10$RwL/FzEP6.vY7x3CW87Vxu2qLjxXwLM6CwOJ/0bViGYtxkbXQvjlG', '$2y$10$HqenK06e1h8eqcTmamEqt.FQVxlUp0exnWFsg5IsZQve3lqEucMii');

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
-- Indexes for table `choice`
--
ALTER TABLE `choice`
  ADD PRIMARY KEY (`choiceid`),
  ADD KEY `quiznum_idx` (`quiz_num`),
  ADD KEY `question_num_idx` (`question_num`);

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_num`,`quiznum`),
  ADD KEY `quiznum_idx` (`quiznum`);

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
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `quiztype`
--
ALTER TABLE `quiztype`
  MODIFY `quiznum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `quiznum` FOREIGN KEY (`quiznum`) REFERENCES `quiztype` (`quiznum`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
