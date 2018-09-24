-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 09:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `endeavour`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `ticketnumber` varchar(10) NOT NULL,
  `flightname` varchar(20) NOT NULL,
  `departurefrom` varchar(20) NOT NULL,
  `landingto` varchar(20) NOT NULL,
  `departuretime` varchar(10) NOT NULL,
  `traveldate` varchar(10) NOT NULL,
  `nop` int(5) NOT NULL,
  `class` varchar(20) NOT NULL,
  `journeytype` varchar(20) NOT NULL,
  `infant` varchar(50) NOT NULL,
  `oldage` varchar(50) NOT NULL,
  `totalprice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`ticketnumber`, `flightname`, `departurefrom`, `landingto`, `departuretime`, `traveldate`, `nop`, `class`, `journeytype`, `infant`, `oldage`, `totalprice`) VALUES
('1', 'GoAir', 'BOM', 'DEL', '07:45', '2006', 4, 'Economy', 'Return', 'infantfooddiapersbabysitterMilk', 'wheelchairdoctor', 203700),
('', 'Emirates', 'DEL', 'BOM', '04:20', '2005', 3, 'Economy', 'Single', 'infantfooddiapers', 'wheelchairnurse', 136900),
('', 'Emirates', 'DEL', 'BOM', '04:20', '2005', 3, 'Economy', 'Single', 'infantfooddiapers', 'wheelchairnurse', 136900),
('', 'Emirates', 'DEL', 'BOM', '04:20', '2005', 3, 'Economy', 'Single', 'infantfooddiapers', 'wheelchairnurse', 136900),
('2', 'Emirates', 'DEL', 'BOM', '04:20', '2005', 3, 'Economy', 'Single', 'infantfooddiapers', 'wheelchairnurse', 136900),
('2', 'Emirates', 'DEL', 'BOM', '04:20', '2005', 3, 'Economy', 'Single', 'infantfooddiapers', 'wheelchairnurse', 136900),
('1', 'Emirates', 'DEL', 'BOM', '04:20', '2005', 3, 'Economy', 'Single', 'infantfooddiapers', 'wheelchairnurse', 136900),
('1', 'Emirates', 'DEL', 'BOM', '04:20', '2005', 3, 'Economy', 'Single', 'infantfooddiapers', 'wheelchairnurse', 136900),
('1', 'Emirates', 'DEL', 'BOM', '04:20', '2005', 3, 'Economy', 'Single', 'infantfooddiapers', 'wheelchairnurse', 136900);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
