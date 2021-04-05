-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 05, 2021 at 02:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todoapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todolist`
--

DROP TABLE IF EXISTS `tbl_todolist`;
CREATE TABLE IF NOT EXISTS `tbl_todolist` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `item` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'PENDING',
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_completed` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_todolist`
--

INSERT INTO `tbl_todolist` (`ID`, `item`, `status`, `date_added`, `date_completed`) VALUES
(39, 'ADD CRUD', 'COMPLETED', '2021-04-05 21:55:02', '2021-04-05 21:55:07'),
(40, 'SUBMIT HOMEWORK', 'COMPLETED', '2021-04-05 21:55:15', '2021-04-05 21:55:17'),
(25, 'cook dinner', 'COMPLETED', '2021-04-05 21:41:51', '2021-04-05 21:41:54'),
(23, 'play ps4', 'COMPLETED', '2021-04-05 21:39:24', '2021-04-05 21:39:25'),
(31, 'wash dishes', 'COMPLETED', '2021-04-05 21:46:15', '2021-04-05 21:46:24'),
(38, 'LEARN PHP', 'COMPLETED', '2021-04-05 21:54:57', '2021-04-05 21:55:05'),
(37, 'PLAY COD', 'PENDING', '2021-04-05 21:54:52', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
