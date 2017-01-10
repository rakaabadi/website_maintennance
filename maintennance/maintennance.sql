-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2017 at 09:57 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maintennance`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `ID` int(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `name` mediumtext NOT NULL,
  `owner` mediumtext NOT NULL,
  `pic` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`ID`, `tanggal_mulai`, `tanggal_selesai`, `name`, `owner`, `pic`, `image`) VALUES
(3, '0000-00-00', '0000-00-00', 'fdsafasdfas', 'sadfsaf', '', ''),
(15, '2017-01-16', '2017-01-25', 'adfsgas', 'asdfasdfasdf', 'asdfasd', ''),
(16, '2017-01-02', '2017-01-10', 'aasd', 'wildhan', 'boy', '');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `maintenance_id` int(255) NOT NULL,
  `application_id` int(255) NOT NULL,
  `maintenance_date` date NOT NULL,
  `entry_by` varchar(255) NOT NULL,
  `total_checklist` int(255) NOT NULL,
  `total_checklist_y` int(255) NOT NULL,
  `total_checklist_n` int(255) NOT NULL,
  `total_checklist_na` int(255) NOT NULL,
  `recommendation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `fullname`, `username`, `password`) VALUES
(2, 'Raka Abadi Susilo', 'raka', '123');

-- --------------------------------------------------------

--
-- Table structure for table `userid_3`
--

CREATE TABLE `userid_3` (
  `ID` int(255) NOT NULL,
  `checklist` varchar(255) NOT NULL,
  `yes` int(255) NOT NULL,
  `no` int(255) NOT NULL,
  `na` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userid_3`
--

INSERT INTO `userid_3` (`ID`, `checklist`, `yes`, `no`, `na`) VALUES
(1, 'sadfsdaf', 1, 0, 0),
(2, 'sadfasdfds', 0, 1, 0),
(3, 'sadfsadf', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userid_15`
--

CREATE TABLE `userid_15` (
  `ID` int(255) NOT NULL,
  `checklist` varchar(255) NOT NULL,
  `yes` int(255) NOT NULL,
  `no` int(255) NOT NULL,
  `na` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userid_15`
--

INSERT INTO `userid_15` (`ID`, `checklist`, `yes`, `no`, `na`) VALUES
(1, 'asdfasdf', 1, 0, 0),
(2, 'asdasfd', 0, 1, 0),
(3, 'asdfas', 1, 0, 0),
(4, 'asdfasdf', 0, 0, 1),
(5, 'asdfasf', 0, 0, 1),
(6, 'asfasf', 0, 1, 0),
(7, 'afasdf', 0, 1, 0),
(8, 'asdfags', 0, 1, 0),
(9, 'fasdfgas', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userid_16`
--

CREATE TABLE `userid_16` (
  `ID` int(255) NOT NULL,
  `checklist` varchar(255) NOT NULL,
  `yes` int(255) NOT NULL,
  `no` int(255) NOT NULL,
  `na` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userid_16`
--

INSERT INTO `userid_16` (`ID`, `checklist`, `yes`, `no`, `na`) VALUES
(1, 'sadf', 0, 0, 1),
(2, 'dfs', 0, 1, 0),
(3, 'asdf', 1, 0, 0),
(4, 'dsa', 0, 1, 0),
(5, 'asdfasdf', 0, 1, 0),
(6, 'adfasdfasdfsad', 1, 0, 0),
(7, 'asdf', 0, 0, 1),
(8, 'asdfasdf', 0, 1, 0),
(9, 'asdfasdf', 0, 1, 0),
(10, 'asdfsa', 1, 0, 0),
(11, 'asfsadfdaf', 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`maintenance_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userid_3`
--
ALTER TABLE `userid_3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userid_15`
--
ALTER TABLE `userid_15`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userid_16`
--
ALTER TABLE `userid_16`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `maintenance_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `userid_3`
--
ALTER TABLE `userid_3`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `userid_15`
--
ALTER TABLE `userid_15`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `userid_16`
--
ALTER TABLE `userid_16`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
