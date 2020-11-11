-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2020 at 05:36 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scout_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_dev`
--

DROP TABLE IF EXISTS `users_dev`;
CREATE TABLE IF NOT EXISTS `users_dev` (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` char(60) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `bio` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_email` (`email`),
  UNIQUE KEY `idx_mobile` (`mobile`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_dev`
--

INSERT INTO `users_dev` (`id`, `username`, `email`, `password`, `mobile`, `name`, `surname`, `job_title`, `bio`) VALUES
(1, 'jamesmcd', 'bezzinga3@gmail.com', '123', '0217821290', 'James', 'McDonald', 'IT', 'hi'),
(4, 'bob', '123@fha.com', '12345', '1234567890', 'mcdas', 'asd', 'asd', 'asd'),
(5, 'tom', 'tom@test.com', '1234567', '0217821291', 'tom', 'sdghnj', 'it', 'asd'),
(6, 'test', 'test@test.com ', '1234', '0217821299 ', 'tester ', 'test ', 'test ', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
