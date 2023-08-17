-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2023 at 05:58 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studyfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `algorithms`
--

CREATE TABLE `algorithms` (
  `Id` varchar(40) NOT NULL,
  `Course` varchar(40) NOT NULL,
  `Time` varchar(40) NOT NULL DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `algorithms`
--

INSERT INTO `algorithms` (`Id`, `Course`, `Time`) VALUES
('SF64d86e84db1d7', 'Algorithms', '5pm');

-- --------------------------------------------------------

--
-- Table structure for table `datastructures`
--

CREATE TABLE `datastructures` (
  `Id` varchar(40) NOT NULL,
  `Course` varchar(40) NOT NULL,
  `Time` varchar(40) NOT NULL DEFAULT '4'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datastructures`
--

INSERT INTO `datastructures` (`Id`, `Course`, `Time`) VALUES
('SF64d86e84db1d7', 'Data Structures', '4pm'),
('SF64d86e84db1d7', 'Data Structures', '4pm'),
('SF64d86e84db1d7', 'Data Structures', '4pm'),
('SF64d86e84db1d7', 'Data Structures', '4pm'),
('SF64d86e84db1d7', 'Data Structures', '4pm'),
('SF64d86f80b4240', 'Data Structures', '4');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `First Name` varchar(40) NOT NULL,
  `Last Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Phone No` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Id` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`First Name`, `Last Name`, `Email`, `Password`, `Phone No`, `Gender`, `Id`) VALUES
('Md Taqi Tahmid', 'Hussain', 'mdtaqi.hussain001@bcmail.cuny.edu', '12345', '929844', 'Male', 'SF64d86e84db1d7'),
('adren', 'riben', 'adriben@bcmail.cuny.edu', '12345', '617589666', 'Male', 'SF64d86f80b4240');

-- --------------------------------------------------------

--
-- Table structure for table `webdesign`
--

CREATE TABLE `webdesign` (
  `Id` varchar(40) NOT NULL,
  `Course` varchar(40) NOT NULL,
  `Time` varchar(40) NOT NULL DEFAULT '6'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webdesign`
--

INSERT INTO `webdesign` (`Id`, `Course`, `Time`) VALUES
('SF64d86e84db1d7', 'WebDesign', '6pm'),
('SF64d86e84db1d7', 'WebDesign', '6pm'),
('SF64d86e84db1d7', 'WebDesign', '6pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
