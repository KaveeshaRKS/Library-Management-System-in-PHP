-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 28, 2022 at 12:53 PM
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
-- Database: `operalibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

DROP TABLE IF EXISTS `bookdetails`;
CREATE TABLE IF NOT EXISTS `bookdetails` (
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `publication_year` int(10) NOT NULL,
  `rack_no` int(10) NOT NULL,
  `items` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`title`, `author`, `category`, `publication_year`, `rack_no`, `items`) VALUES
('Madolduwa', 'Amarapala', 'Novels', 2000, 1, 3),
('Biology', 'Keerthi', 'A/Level', 2001, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `signupopera`
--

DROP TABLE IF EXISTS `signupopera`;
CREATE TABLE IF NOT EXISTS `signupopera` (
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `PW` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signupopera`
--

INSERT INTO `signupopera` (`FirstName`, `LastName`, `email`, `PW`) VALUES
('Lahiru', 'Kavinda', 'lahiru@gmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
