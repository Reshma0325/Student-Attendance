-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 01:55 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `att`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(11) NOT NULL,
  `adminpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminpassword`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `sno` int(11) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `order` char(1) NOT NULL,
  `h1` varchar(10) NOT NULL,
  `h2` varchar(10) NOT NULL,
  `h3` varchar(10) NOT NULL,
  `h4` varchar(10) NOT NULL,
  `h5` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sno`, `regno`, `date`, `order`, `h1`, `h2`, `h3`, `h4`, `h5`) VALUES
(18, '19CSE01', '2022-04-17', 'A', 'AB', 'AB', 'AB', 'AB', '-'),
(19, '19CSE02', '2022-04-17', 'A', 'AB', 'AB', 'AB', 'AB', '-'),
(21, '19CSE03', '2022-04-17', 'A', 'AB', '-', '-', 'AB', '-'),
(22, '18CSE02', '2022-03-17', 'A', 'AB', '-', '-', '-', '-'),
(23, '19CSE04', '2022-03-17', 'A', '-', 'AB', '-', '-', '-'),
(24, '19CSE05', '2022-05-09', 'D', 'AB', '-', '-', '-', '-'),
(25, '19CSE08', '2022-05-09', 'D', 'AB', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `sno` int(11) NOT NULL,
  `date` date NOT NULL,
  `order` char(1) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`sno`, `date`, `order`, `description`) VALUES
(1, '2022-04-17', 'A', 'Easter'),
(3, '2022-03-17', 'A', 'Group Photo'),
(4, '2022-04-26', 'F', 'Nothing'),
(5, '2022-05-04', 'F', 'Flowers Day'),
(6, '2022-05-08', 'C', 'Mothers Day'),
(7, '2022-05-09', 'D', 'Nothing'),
(8, '2022-05-10', 'E', 'Nothing'),
(9, '2022-05-11', 'F', 'Nothing'),
(10, '2022-05-12', 'A', 'Nothing'),
(13, '2022-05-13', 'B', 'Nothing'),
(14, '2022-05-14', 'C', 'Nothing'),
(15, '2022-05-15', 'D', 'Nothing'),
(16, '2022-05-16', 'E', 'Nothing'),
(19, '2022-05-17', 'F', 'Nothing'),
(20, '2022-05-18', 'A', 'Nothing');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(11) NOT NULL,
  `staffname` varchar(200) NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactnumber` int(10) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `staffname`, `department`, `email`, `contactnumber`, `password`) VALUES
(101, 'Kala', 'Computer Science', 'kala@gmail.com', 1234567890, '101'),
(102, 'Ganesan', 'Computer Science', 'ganesan@gmail.com', 1234567891, '102'),
(103, 'Priya', 'Computer Science', 'priya@gmail.com', 1234567890, '103');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sno` int(11) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `studentname` varchar(25) NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactnumber` int(10) NOT NULL,
  `batch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sno`, `regno`, `studentname`, `department`, `email`, `contactnumber`, `batch`) VALUES
(50, '17CSE01', 'Priya', 'Computer Science', 'priya@gmail.com', 1234567899, '17CSE'),
(47, '18CSE01', 'Prem', 'Computer Science', 'prem@gmail.com', 1234567890, '18CSE'),
(48, '18CSE02', 'Sowmiya', 'Computer Science', 'sowmiya@gmail.com', 1234567899, '18CSE'),
(49, '18CSE03', 'Rakshitha', 'Computer Science', 'rakshitha@gmail.com', 1234567899, '18CSE'),
(46, '19CSE01', 'Jeno', 'Computer Science', 'jeno@gmail.com', 1234567890, '19CSE'),
(36, '19CSE02', 'Prakash', 'Computer Science', 'prakash@gmail.com', 1234567890, '19CSE'),
(37, '19CSE03', 'Kala', 'Computer Science', 'kala@gmail.com', 1234567891, '19CSE'),
(38, '19CSE04', 'Siva', 'Computer Science', 'siva@gmail.com', 1234567892, '19CSE'),
(34, '19CSE05', 'Sri', 'Computer Science', 'sri@gmail.com', 1234567890, '19CSE'),
(39, '19CSE06', 'Remya', 'Computer Science', 'remya@gmail.com', 1234567893, '19CSE'),
(43, '19CSE07', 'Ganesan', 'Computer Science', 'ganesan@gmail.com', 1234567893, '19CSE'),
(41, '19CSE08', 'Anish', 'Computer Science', 'anish@gmail.com', 1234567893, '19CSE'),
(44, '19CSE09', 'Dharshan', 'Computer Science', 'dharshan@gmail.com', 1234567893, '19CSE'),
(45, '19CSE10', 'Dharshini', 'Computer Science', 'dharshini@gmail.com', 1234567893, '19CSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `adminid` (`adminid`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `sno` (`sno`),
  ADD KEY `regno` (`regno`),
  ADD KEY `date` (`date`),
  ADD KEY `order` (`order`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD KEY `order` (`order`),
  ADD KEY `sno` (`sno`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regno`),
  ADD KEY `sno` (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`regno`) REFERENCES `student` (`regno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`date`) REFERENCES `order` (`date`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_ibfk_3` FOREIGN KEY (`order`) REFERENCES `order` (`order`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
