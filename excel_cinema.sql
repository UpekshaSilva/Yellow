-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2016 at 05:54 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `excel_cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `Emp_No` int(5) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Occupation` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_No` varchar(5) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Telephone` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_No`, `Name`, `NIC`, `Address`, `Telephone`) VALUES
('E001', 'upeksha', '935480868V', 'Horana', '0716494260'),
('E002', 'janaka', '915480868V', 'Awissalwella', '0776494260'),
('E003', 'janani', '925480868V', 'Nittabuwa', 'phone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`Emp_No`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_No`),
  ADD UNIQUE KEY `Telephone` (`Telephone`),
  ADD UNIQUE KEY `NIC` (`NIC`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
