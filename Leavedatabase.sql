-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 19, 2022 at 12:24 PM
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
-- Database: `leave`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `number` bigint(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `name`, `email`, `password`, `number`) VALUES
(1, 'Karthick', 'karthi@gmail.com', 'karthi1016', 7339218794);

-- --------------------------------------------------------

--
-- Table structure for table `assoc`
--

CREATE TABLE `assoc` (
  `associd` int(5) NOT NULL,
  `employeeid` int(5) DEFAULT NULL,
  `managerid` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assoc`
--

INSERT INTO `assoc` (`associd`, `employeeid`, `managerid`) VALUES
(72, 74, 40),
(73, 75, 42),
(74, 76, 43),
(75, 77, 41),
(76, 78, NULL),
(94, 96, 44),
(95, 97, 40);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phonenumber` bigint(14) DEFAULT NULL,
  `managerId` int(5) DEFAULT NULL,
  `usertype` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `password`, `phonenumber`, `managerId`, `usertype`) VALUES
(74, 'Saravana', 'saravana09@gmail.com', 'a5d4b2c021c5c1f2418be5b15bf38c63', 6789098766, 40, '1'),
(75, 'Jeeva', 'jeeva@gmail.com', '4a74f685e34ee9718b8882252a811d10', 9089767867, 42, '1'),
(76, 'Keerthana', 'keerthana87@gmail.com', '33c98ffa0c1db3d1ad4f7153d4c1cfac', 7890908012, 43, '1'),
(77, 'Pranavi', 'pranavi@gmail.com', 'a19654b27e6585b70bb19815c37236ed', 7668879987, 41, '1'),
(78, 'Pavithra', 'pavithra@gmail.com', 'dd83719b1d46bc3e2df076811d982afe', 9876423412, NULL, '1'),
(96, 'Mahesh', 'mahesh23@gmail.com', '83cd20b51c7d99e8aa12a39978f7f094', 8900789009, 44, '1'),
(97, 'Jacob', 'jacob123@gmail.com', '655397c597ea7b685dfd45775ff70b07', 8778907623, 40, '1');

-- --------------------------------------------------------

--
-- Table structure for table `leaveapprove`
--

CREATE TABLE `leaveapprove` (
  `id` int(5) NOT NULL,
  `fromdate` varchar(11) DEFAULT NULL,
  `todate` varchar(11) DEFAULT NULL,
  `leavetypes` varchar(25) DEFAULT NULL,
  `days` int(5) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `employeename` varchar(25) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `employeeid` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaveapprove`
--

INSERT INTO `leaveapprove` (`id`, `fromdate`, `todate`, `leavetypes`, `days`, `description`, `employeename`, `status`, `employeeid`) VALUES
(8, '2022-08-11', '2022-08-11', 'Casual', 1, 'Going to Home', 'Jeeva', 'Decline', 75),
(11, '2022-08-11', '2022-08-12', 'Sick', 2, 'Sick', 'Saravana', 'Approve', 74),
(12, '2022-08-16', '2022-08-17', 'Personal', 2, 'Going to home', 'Saravana', 'Decline', 74),
(13, '08/17/2022', '08/18/2022', 'Sick', 2, 'leave\r\n', 'Saravana', 'Decline', 74),
(33, '08/18/2022', '08/19/2022', 'Personal', 2, 'My sister Wedding', 'Pranavi', 'Approve', 77),
(39, '08/17/2022', '08/17/2022', 'Casual', 1, 'sdj', 'Saravana', 'Decline', 74),
(40, '08/17/2022', '08/18/2022', 'Sick', 2, 'shjdfiaiuiafehajdh', 'Saravana', 'Decline', 74),
(41, '08/16/2022', '08/25/2022', 'Personal', 5, 'going to tour', 'Saravana', 'Approve', 74);

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `sno` int(5) NOT NULL,
  `types` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`sno`, `types`) VALUES
(3, 'Sick'),
(4, 'Casual'),
(8, 'Personal');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `managerid` int(10) NOT NULL,
  `managername` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phonenumber` bigint(15) DEFAULT NULL,
  `usertype` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`managerid`, `managername`, `email`, `password`, `phonenumber`, `usertype`) VALUES
(40, 'Hari Dharshini', 'haridharshu23@gmail.com', '73295a7430572090d36bdd56010ac5b6', 9012345798, '0'),
(41, 'Monisha', 'monisha123@gmail.com', 'd8b5ba8c1176eccc3590108781f64cbf', 8978651234, '0'),
(42, 'Akash', 'akash27@gmail.com', '25b07fab46b27d9d3cceef3135c874bc', 8798564532, '0'),
(43, 'Oviya', 'oviya@gmail.com', 'aa75d1bf81dde79c57002acbf8ea0684', 8712060567, '0'),
(44, 'Mithun', 'mithun76@gmail.com', '12b50f1eee2e92d6b777da6f9889e75b', 8543213401, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `assoc`
--
ALTER TABLE `assoc`
  ADD PRIMARY KEY (`associd`),
  ADD KEY `managerid` (`managerid`),
  ADD KEY `id` (`employeeid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phonenumber` (`phonenumber`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `managerId` (`managerId`);

--
-- Indexes for table `leaveapprove`
--
ALTER TABLE `leaveapprove`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employeeid` (`employeeid`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`managerid`),
  ADD UNIQUE KEY `phonenumber` (`phonenumber`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assoc`
--
ALTER TABLE `assoc`
  MODIFY `associd` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `leaveapprove`
--
ALTER TABLE `leaveapprove`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `managerid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assoc`
--
ALTER TABLE `assoc`
  ADD CONSTRAINT `assoc_ibfk_2` FOREIGN KEY (`managerid`) REFERENCES `manager` (`managerid`),
  ADD CONSTRAINT `assoc_ibfk_3` FOREIGN KEY (`employeeid`) REFERENCES `employee` (`id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`managerId`) REFERENCES `manager` (`managerid`);

--
-- Constraints for table `leaveapprove`
--
ALTER TABLE `leaveapprove`
  ADD CONSTRAINT `leaveapprove_ibfk_1` FOREIGN KEY (`employeeid`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
