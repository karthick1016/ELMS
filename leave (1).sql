-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 12, 2022 at 07:01 AM
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
(73, 75, 43),
(74, 76, 41),
(75, 77, 41),
(76, 78, 44),
(94, 96, 43),
(95, 97, 44),
(113, 123, NULL),
(114, 124, NULL),
(118, 128, NULL),
(119, 129, NULL),
(120, 130, NULL),
(122, 132, NULL);

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
  `managerId` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `password`, `phonenumber`, `managerId`) VALUES
(74, 'saravana', 'saravana09@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 6789098711, 40),
(75, 'Jeeva', 'jeeva@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 9089767867, 43),
(76, 'Keerthana', 'keerthana87@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 7890908012, 41),
(77, 'Pranavi', 'pranavi@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 8889991212, 41),
(78, 'Pavithra', 'pavithra@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 9876423412, 44),
(96, 'Mahesh', 'mahesh23@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 8900789009, 43),
(97, 'Jacob', 'jacob123@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 8778907612, 44),
(123, 'Lawrence', 'lawarence123@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 8790098761, NULL),
(124, 'Prabhu', 'prabhu@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 8900789065, NULL),
(128, 'Katrina', 'katrina12@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 6789098145, NULL),
(129, 'jessi', 'jessi123@gmail.ccom', '482c811da5d5b4bc6d497ffa98491e38', 8907890787, NULL),
(130, 'Snekha', 'snekha23@gmail.com', 'd16cb7162db2c74ed0c69726b67d6dcc', 8978986701, NULL),
(132, 'Jenisha', 'jenisha@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 6756455432, NULL);

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
  `status` tinyint(3) DEFAULT NULL,
  `employeeid` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaveapprove`
--

INSERT INTO `leaveapprove` (`id`, `fromdate`, `todate`, `leavetypes`, `days`, `description`, `employeename`, `status`, `employeeid`) VALUES
(8, '2022-08-11', '2022-08-11', 'Casual', 1, 'Going to Home', 'Jeeva', 1, 75),
(11, '2022-08-11', '2022-08-12', 'Sick', 2, 'Sick', 'Saravana', 2, 74),
(12, '2022-08-16', '2022-08-17', 'Personal', 2, 'Going to home', 'Saravana', 1, 74),
(13, '08/17/2022', '08/18/2022', 'Sick', 2, 'leave\r\n', 'Saravana', 1, 74),
(33, '08/18/2022', '08/19/2022', 'Personal', 2, 'My sister Wedding', 'Pranavi', 2, 77),
(41, '08/16/2022', '08/25/2022', 'Personal', 5, 'going to tour', 'Saravana', 2, 74),
(43, '08/23/2022', '08/24/2022', 'Sick', 2, 'I am suffering from fever', 'Saravana', 2, 74),
(44, '08/24/2022', '08/25/2022', 'Sick', 2, 'Fever', 'Saravana', 2, 74),
(45, '08/25/2022', '08/26/2022', 'Casual', 2, 'I am going to my native place', 'Pavithra', 2, 78),
(47, '08/26/2022', '08/26/2022', 'Sick', 1, 'Suffering From Ulcer', 'Keerthana', 2, 76),
(48, '09/26/2022', '09/26/2022', 'Personal', 1, 'My Sister marriage', 'Mahesh', 2, 96),
(49, '09/27/2022', '09/30/2022', 'Casual', 4, 'I am going to tour', 'Jacob', 1, 97),
(50, '08/26/2022', '08/26/2022', 'Sick', 2, 'Fever ', 'Saravana', 2, 74),
(51, '08/29/2022', '08/30/2022', 'Sick', 2, 'Fever', 'Saravana', 1, 74),
(74, '09/01/2022', '09/01/2022', 'Sick', 1, 'sick                                  ', 'Jeeva', NULL, 75),
(82, '09/02/2022', '09/02/2022', 'Sick', 1, '        sick                            ', 'Jeeva', NULL, 75);

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
(4, 'Casual');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `managerid` int(10) NOT NULL,
  `managername` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phonenumber` bigint(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`managerid`, `managername`, `email`, `password`, `phonenumber`) VALUES
(40, 'Hari Dharshini', 'haridharshu23@gmail.com', '9df7a7314e3884b26222e2ccd834aa24', 9012345792),
(41, 'Monisha', 'monisha123@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 8978651234),
(42, 'Akash', 'akash27@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 8798564532),
(43, 'Oviya', 'oviya@gmail.com', '7096bb445dc0d4162cd102693b94b1cf', 8712060523),
(44, 'Mithun', 'mithun76@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 8543213401),
(52, 'Swetha', 'swetha@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 8907123445),
(53, 'Kareena', 'kareena@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 9056780912),
(54, 'Nithya', 'nithya12@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 7809673412),
(55, 'Rannith', 'rannith12@gmail.com', '482c811da5d5b4bc6d497ffa98491e38', 9079033454);

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
  MODIFY `associd` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `leaveapprove`
--
ALTER TABLE `leaveapprove`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `managerid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

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
