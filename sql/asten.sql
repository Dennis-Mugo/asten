-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 10:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asten`
--
CREATE DATABASE IF NOT EXISTS `asten` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `asten`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `pass`) VALUES
(2, 'Otieno', 'alex@yahoo.com', '$2y$10$bEbu2wbYdrqEHK3cTHVuj.rNhIw04iN6zMUJZrQh2SZI9vtOIpYrm'),
(3, 'Otieno', 'andyomondi17@gmail.com', '$2y$10$Ra5iKif7g5BLdhtKPvVTUez2.wT1HOIl19jXqqI7swwWNnrjKiD12'),
(4, 'Mugo', 'owalo@gmail.com', '$2y$10$YksLgVPtMS8yGI2lF2nr/e2rsAnPfLpy7Rc8DvpwzoQjLIjRfyGn6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
