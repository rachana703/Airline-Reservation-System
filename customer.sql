-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2017 at 04:45 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `endeavour`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `name` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `bday` date NOT NULL,
  `address` varchar(40) NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `phone`, `bday`, `address`, `gender`, `email`, `userid`, `pass`) VALUES
('abc', 123, '2018-11-03', 'abc,xyz', 'male', 'abc@xyz.com', 'abc123', 'abc@123'),
('bhakti', 9865164, '1997-12-28', 'andheri', 'female', 'bhakti@gmail.com', 'bhakti123', 'bhakti@123'),
('rachana', 643, '2017-11-07', 'kandivali', 'female', 'rach@gmail.com', 'rach123', 'rach@123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
