-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 04:43 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@test.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'test@demo.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `c_code` varchar(50) NOT NULL,
  `c_title` varchar(100) NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `c_code`, `c_title`, `aid`) VALUES
(1, 'CSE-301', 'Statistics and Probabilities', 1),
(2, 'CSE-305', 'System Analysis', 1),
(3, 'CSE-205', 'Computer Fundamental', 2),
(4, 'CSE-207', 'Algorithm', 2),
(5, 'CSE-101', 'Programming With ', 2),
(6, 'MTH-201', 'Mathematics', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_log`
--

CREATE TABLE `course_log` (
  `id` int(11) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `total_std` int(11) NOT NULL,
  `present` int(11) NOT NULL,
  `absent` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_log`
--

INSERT INTO `course_log` (`id`, `course_title`, `course_code`, `total_std`, `present`, `absent`, `date`) VALUES
(15, 'hi', 'CSE-307', 3, 2, 1, 1506077475),
(16, 'abasd', 'CSE-304', 3, 2, 1, 1506077504),
(17, 'vbkhik', 'CSE-305', 3, 2, 1, 1506077545),
(19, 'ABCD', 'CSE-301', 3, 3, 0, 1506077770),
(20, 'abcd', 'CSE-302', 8, 6, 2, 1506690624),
(21, 'ABCD', 'CSE-302', 8, 7, 1, 1508888556),
(22, '8787', 'CSE-303', 8, 4, 4, 1509198800),
(23, 'Aamr', 'CSE-301', 8, 7, 1, 1509245255),
(24, 'Statistics', 'CSE-301', 8, 9, 0, 1509245428),
(25, 'ABC', 'CSE-301', 8, 6, 2, 1509245726);

-- --------------------------------------------------------

--
-- Table structure for table `info_date`
--

CREATE TABLE `info_date` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `month_id` varchar(50) NOT NULL,
  `year_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_date`
--

INSERT INTO `info_date` (`id`, `day`, `month_id`, `year_id`) VALUES
(1, 27, 'October', 2017),
(2, 28, 'October', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `id` int(11) NOT NULL,
  `month` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`id`, `month`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `std`
--

CREATE TABLE `std` (
  `id` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `reg` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std`
--

INSERT INTO `std` (`id`, `roll`, `reg`, `name`, `level`, `dept`) VALUES
(1, 25012, 151101025, 'Mahbub Raza', '3-2', 'CSE'),
(2, 28099, 1511028, 'Abdul Kader', '3-2', 'CSE'),
(3, 25445, 151122115, 'Kismot Ali', '3-2', 'CSE'),
(4, 25000, 151111111, 'Kk', '3-1', 'CSE'),
(5, 7878784, 454545, 'Abul Hussain', '2-2', 'BBA'),
(6, 28035, 151101035, 'Ishtiyak Abir Juned', '3-1', 'CSE'),
(7, 121213, 545465, 'bbbbb', '2-1', 'ECE'),
(8, 546465, 5464, 'bhgggjkhkj', '1-2', 'ECE');

-- --------------------------------------------------------

--
-- Table structure for table `std_log`
--

CREATE TABLE `std_log` (
  `id` int(11) NOT NULL,
  `std_id` int(50) NOT NULL,
  `action` int(50) NOT NULL,
  `date` int(11) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `date_id` int(11) NOT NULL,
  `month_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_log`
--

INSERT INTO `std_log` (`id`, `std_id`, `action`, `date`, `course_id`, `date_id`, `month_id`) VALUES
(6, 25445, 0, 1506026864, '', 1, 1),
(11, 25012, 1, 1506057474, '', 2, 10),
(12, 25445, 1, 1506057475, '', 1, 10),
(14, 25012, 1, 1506057558, '', 2, 11),
(15, 25445, 0, 1506057559, '', 2, 12),
(16, 28099, 0, 1506057561, '', 1, 10),
(17, 25012, 1, 1506057586, '', 1, 10),
(19, 25445, 1, 1506058059, '', 1, 6),
(20, 28099, 0, 1506058061, '', 2, 7),
(22, 25445, 0, 1506058132, '', 1, 9),
(24, 25012, 1, 1506058182, '', 1, 10),
(25, 25445, 1, 1506058183, '', 1, 11),
(27, 25012, 1, 1506058327, '', 1, 10),
(28, 25445, 1, 1506058329, '', 1, 12),
(139, 25000, 1, 1509245255, '', 0, 0),
(140, 25012, 1, 1509245255, '', 0, 0),
(141, 25445, 0, 1509245255, '', 0, 0),
(142, 28035, 1, 1509245255, '', 0, 0),
(143, 28099, 1, 1509245255, '', 0, 0),
(144, 121213, 1, 1509245255, '', 0, 0),
(145, 546465, 1, 1509245255, '', 0, 0),
(146, 7878784, 1, 1509245255, '', 0, 0),
(147, 25000, 1, 1509245428, '', 0, 0),
(148, 25012, 1, 1509245428, '', 0, 0),
(149, 25445, 1, 1509245428, '', 0, 0),
(150, 28035, 1, 1509245428, '', 0, 0),
(151, 28099, 1, 1509245428, '', 0, 0),
(152, 121213, 1, 1509245428, '', 0, 0),
(153, 121213, 1, 1509245428, '', 0, 0),
(154, 546465, 1, 1509245428, '', 0, 0),
(155, 7878784, 1, 1509245428, '', 0, 0),
(156, 25012, 0, 1509245726, '', 0, 0),
(157, 28035, 0, 1509245726, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `year`) VALUES
(1, 2016),
(2, 2017),
(3, 2015),
(4, 2018);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_log`
--
ALTER TABLE `course_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_date`
--
ALTER TABLE `info_date`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `std`
--
ALTER TABLE `std`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`roll`);

--
-- Indexes for table `std_log`
--
ALTER TABLE `std_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `course_log`
--
ALTER TABLE `course_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `info_date`
--
ALTER TABLE `info_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `std`
--
ALTER TABLE `std`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `std_log`
--
ALTER TABLE `std_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
