-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2019 at 07:15 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eID` int(11) UNSIGNED ZEROFILL NOT NULL,
  `eName` varchar(50) DEFAULT NULL,
  `eAge` int(11) DEFAULT NULL,
  `eGender` varchar(20) DEFAULT NULL,
  `eContact` bigint(20) DEFAULT NULL,
  `eAddress` varchar(50) DEFAULT NULL,
  `eBirthday` date DEFAULT NULL,
  `eJobDesc` varchar(50) DEFAULT NULL,
  `ePassword` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eID`, `eName`, `eAge`, `eGender`, `eContact`, `eAddress`, `eBirthday`, `eJobDesc`, `ePassword`) VALUES
(00001800743, 'Patricia Namoro', 20, 'Female', 987654321, 'Iriga City', '1999-10-22', 'Reasearch Analyst', '1234'),
(00001800745, 'jana', 20, 'Female', 987654321, 'Iriga City', '1999-03-10', 'Database Analyst', '4567');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `emID` int(11) DEFAULT NULL,
  `emName` varchar(50) DEFAULT NULL,
  `emPassword` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`emID`, `emName`, `emPassword`) VALUES
(1800745, 'Pat456', '1234'),
(1800746, 'Patricia456', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `eID` int(11) DEFAULT NULL,
  `eName` varchar(50) DEFAULT NULL,
  `rateperhour` int(11) DEFAULT NULL,
  `hourperday` int(11) DEFAULT NULL,
  `numberofdayswork` int(11) DEFAULT NULL,
  `grossSalary` int(11) DEFAULT NULL,
  `tax` int(11) DEFAULT NULL,
  `philhealth` double DEFAULT NULL,
  `sss` double DEFAULT NULL,
  `totaldeduct` double DEFAULT NULL,
  `netsalary` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`eID`, `eName`, `rateperhour`, `hourperday`, `numberofdayswork`, `grossSalary`, `tax`, `philhealth`, `sss`, `totaldeduct`, `netsalary`) VALUES
(1800743, 'Patricia Namoro', 100, 8, 30, 24000, 3600, 1200, 480, 5280, 18720);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
