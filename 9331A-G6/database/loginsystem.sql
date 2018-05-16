-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: localhost    Database: loginsystem
-- ------------------------------------------------------
-- Server version	5.7.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `question_num` int(11) NOT NULL AUTO_INCREMENT,
  `question` longtext NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`question_num`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
INSERT INTO `question` VALUES (1,'What does PHP stands for?','Hypertext Processor'),(3,'Which of the following is used to declare a constant','define	'),(5,'What is the strpos() function used for?','Search for character within a string	'),(6,'What is the difference between GET and POST method?','GET displays the form values entered in the URL of the address bar where as POST does not.'),(7,'function in PHP Returns a list of response headers sent','headers_list()	\r\n'),(8,'What is array_keys() used for?','Returns all the keys of an array'),(9,'What is the purpose of $_SESSION[]?',' Used to store variables of the current session'),(10,'Variables always start with a ___ in PHP','$\r\n'),(11,'PHP is an open source software','True'),(12,'PHP runs on different platforms (Windows, Linux, Unix, etc.)','True'),(13,'What is the operater for comparing two values in PHP?','==='),(14,'What function computes the difference of arrays?','array_diff();'),(15,'What are the paremeters in the function mysql_connect()?','Servername,database username, database password, database name'),(16,'\r\nIt  occurs when there is an untrusted data which is sent \r\nas a part of a command or query','Injecton'),(17,'Bank account informations, health information, personal informations\r\nare example of what?Sensitive Datas','Sensitive Datas'),(18,'What does XXE stands for ?','XML External Entities'),(19,'What does XSS stands for?','Cross Site Scripting'),(21,'Some components are vulnerable when they are not update. What Vulnerability is this?','Using Components with Known Vulnerabilities'),(22,'what does DoS stands for?','Denial of Service'),(23,'what does DDoS stands for?','Distributed Denial of Service'),(24,'When hackers gain control of sensitive datas, they can use it to steal informations. what vulnerability is this?','SENSITIVE DATA EXPOSURE'),(25,'An application compiles a list of malicious inputs then verifies the external input from a given list of malicious inputs. what type of validating the input is mentioned?','Blacklisting'),(26,'What does JSP stands for?','Java Server Pages');
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_quiz`
--

DROP TABLE IF EXISTS `user_quiz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_quiz` (
  `user_id` int(11) NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`score`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_quiz`
--

LOCK TABLES `user_quiz` WRITE;
/*!40000 ALTER TABLE `user_quiz` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_quiz` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(256) CHARACTER SET latin1 NOT NULL,
  `lname` varchar(256) CHARACTER SET latin1 NOT NULL,
  `uname` varchar(256) CHARACTER SET latin1 NOT NULL,
  `emailadd` varchar(256) CHARACTER SET latin1 NOT NULL,
  `birthday` varchar(256) CHARACTER SET latin1 NOT NULL,
  `pass` varchar(256) CHARACTER SET latin1 NOT NULL,
  `repass` varchar(256) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'Jhaylord','Viray','jay','2163058@slu.edu.ph','2018-05-05','$2y$10$TsjJm40sPFUaMvpDo.wwFu8QPkIo9jt7ImI2CQtiSkVE0ATjgGhHe','$2y$10$QOKQQXh/sdbafh/Z7lFRAedEe6VPdXvXw6TN4igL7ojl0HLzCSFpu'),(4,'aaa','aaa','aaa','12121@gmail.com','2018-05-03','$2y$10$xDOw4hRqvS9eODMafylafue7ijc2P5GKZoE1E891ZlyA.TG3juOQS','$2y$10$VRlBHtV4WeBAoCgkC5fVCOLZyj9unEelCRJpRm/ba8Lz3PLj2Cy/C'),(5,'aaa','aaa','zxc','aaa@yahoo.com','2018-05-02','$2y$10$535vzHVcQhQinAAjZSIBherunPoZk3yEZwxtUrpsc7DALmfeZJ3t6','$2y$10$CaW6z8VCXsqkYo6svbdnh.dWKSInl0GHzSEScTTFdNZfRbdCpqHTy'),(6,'Test','Test','test','Test@gmail.com','2018-05-01','$2y$10$vmELS46qDhXfhrYIsg5Q8eRktCbgSb2k/QTPgrssBKCgiP89AANdO','$2y$10$HYxfj7WaHux2K1xA4lhIku/jpD87tJRAD8MDWvtEVbIO/QC0SXzhi'),(8,'Delfin','Cachin','delfin','delfin@gmail.com','1998-03-01','$2y$10$55qDNgdfAyXjxl97kfkrE.yONWNYBtuR8PAcehLY5myA837rwycb2','$2y$10$yo2jA2t75QoL5W3XDlHz.OR1glOdKnXmPxTNjvxcAh0LNGoe3Il4S'),(9,'Blessly','Carbonell','blehli','blesslycarbonell@gmail.com','1998-09-06','$2y$10$RwL/FzEP6.vY7x3CW87Vxu2qLjxXwLM6CwOJ/0bViGYtxkbXQvjlG','$2y$10$HqenK06e1h8eqcTmamEqt.FQVxlUp0exnWFsg5IsZQve3lqEucMii');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-14 16:49:57
