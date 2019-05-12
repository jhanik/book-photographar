-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2017 at 04:49 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photography`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'jhanik', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(100) NOT NULL,
  `photographer_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `venue` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `photographer_id`, `username`, `password`, `bdate`, `venue`, `city`) VALUES
(4, 1, 'jahid', '7878', '2017-08-12', 'army golf club', 'Chittagong'),
(9, 4, 'anik', '787898', '2017-06-12', 'dhaka centre', 'Dhaka'),
(10, 6, 'anik', '787898', '2017-04-12', 'dhaka centre', 'Dhaka'),
(11, 9, 'robin1', '5555', '2013-12-12', 'officers club', 'Dhaka'),
(12, 11, 'anik', '787898', '2017-07-12', 'dhaka centre', 'Chittagong');

-- --------------------------------------------------------

--
-- Table structure for table `clocation`
--

CREATE TABLE `clocation` (
  `clid` int(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `postalcode` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clocation`
--

INSERT INTO `clocation` (`clid`, `Address`, `City`, `postalcode`, `Country`) VALUES
(1, 'rd-16,plot-B, flat no=3C,bonosree', 'Dhaka', '1524', 'Bangladesh'),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, 'dddd', '', '', ''),
(5, 'ddd', 'dd', '1212', 'dd'),
(6, 'ddd', 'Chittagong', '1212', 'Bangladesh'),
(7, 'ddd', 'Chittagong', '1212', 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `csid` int(100) NOT NULL,
  `First_name` varchar(100) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`csid`, `First_name`, `Last_name`, `username`, `password`, `Email`, `phone`) VALUES
(1, 'robin', 'hasan', 'robin1', '5555', 'robin@yahoo.com', 164555555),
(2, '', 'ddd', '', '', '', 0),
(3, '', 'sss', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, 'dddd', 'ddd', 'dddd', 'fffff', 'dddd', 4404404),
(6, 'dddd', 'barai', 'anik', '787898', 'dddd', 1521216485),
(7, 'dddd', 'barai', 'jahid', '7878', 'dddd', 1521216485),
(8, '3', 'jahid', '7878', '2017-09-11T20:30', 'army golf club', 0),
(9, '3', 'jahid', '7878', '2017-09-11T20:30', 'army golf club', 0),
(10, '3', 'jahid', '7878', '2017-08-11T15:00', 'army golf club', 0);

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `pid` int(10) NOT NULL,
  `First_name` varchar(100) DEFAULT NULL,
  `Last_name` varchar(100) NOT NULL,
  `Email_id` varchar(100) NOT NULL,
  `Phone_no` int(100) NOT NULL,
  `Experience` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`pid`, `First_name`, `Last_name`, `Email_id`, `Phone_no`, `Experience`, `Gender`, `Type`) VALUES
(1, 'jahid', 'hasan', 'jh_anik@yahoo.com', 1521216485, '2 years', 'Male', 'Wedding/Birthday/others'),
(2, 'amit', 'barai', 'amitbarai@gmail.com', 164826566, '3 years', 'Male', 'Landscape'),
(6, 'fffff', 'hasan', 'jh_anik@yahoo.com', 1521216485, '3 years', 'Male', 'Landscape'),
(7, '', 'hasan', 'jh_anik@yahoo.com', 1521216485, '3 years', 'Male', 'Landscape'),
(8, 'hjdsskxk', 'oisdjs', 'kkaskas', 22054233, 'nsjAKXNS', 'Male', 'Protrait'),
(9, 'jahid', 'hasan', 'meglazahanmitu@gmail.com', 164555555, '3 years', 'Female', 'Wedding/Birthday/others'),
(10, 'fwfa', 'wfwadecwd', 'ewcwwdecw', 155555555, '2 years', 'Male', 'Protrait'),
(11, 'Robin', 'Moga', 'robinn921@gmail.com', 168149396, 'nai', 'Male', 'Landscape'),
(12, 'amit', 'barai', 'dddd', 155555555, '2 years', 'Male', 'Wedding/Birthday/others');

-- --------------------------------------------------------

--
-- Table structure for table `plocation`
--

CREATE TABLE `plocation` (
  `lid` int(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `postalcode` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plocation`
--

INSERT INTO `plocation` (`lid`, `Address`, `City`, `postalcode`, `Country`) VALUES
(1, 'cha-111/A,Uttar badda', 'Dhaka', '1212', 'Bangladesh'),
(2, 'rd-16,plot-B, flat no=3C,ambarkhana', 'Chittagong', '1524', 'Bangladesh'),
(6, 'cha-111/A,Uttar badda', 'Chittagong', '1212', 'Bangladesh'),
(7, 'cha-111/A,Uttar badda', 'Chittagong', '1212', 'Bangladesh'),
(8, 'cha-111/A,Uttar badda', 'Chittagong', '', 'Bangladesh'),
(9, 'rd-16,plot-B, flat no=3C,ambarkhana', 'Dhaka', '1212', 'Bangladesh'),
(10, 'rd-16,plot-B, flat no=3C,bonosree', 'Chittagong', '1212', 'Bangladesh'),
(11, 'nsu', 'dhaka', '1229', 'j'),
(12, 'cha-111/A,Uttar badda', 'dd', '1212', 'Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `clocation`
--
ALTER TABLE `clocation`
  ADD PRIMARY KEY (`clid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`csid`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `plocation`
--
ALTER TABLE `plocation`
  ADD PRIMARY KEY (`lid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `clocation`
--
ALTER TABLE `clocation`
  MODIFY `clid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `csid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `plocation`
--
ALTER TABLE `plocation`
  MODIFY `lid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
