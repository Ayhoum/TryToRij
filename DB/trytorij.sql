-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2017 at 07:36 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trytorij`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(6) NOT NULL,
  `User_Name` varchar(20) COLLATE utf8_bin NOT NULL,
  `Password` varchar(20) COLLATE utf8_bin NOT NULL,
  `Email` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` int(9) NOT NULL,
  `user_firstname` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_lastname` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_email` text COLLATE utf8_bin NOT NULL,
  `user_password` varchar(255) COLLATE utf8_bin NOT NULL,
  `user_phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_phone`) VALUES
(1, 'Ayham', 'Najem', 'aylosa@outlook.com', 'Ayhoum!2', 648632561),
(2, 'Alaa', 'Semsmea', 'asd@asd.nl', 'Alaa!2', 646464646);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `ID` int(6) NOT NULL,
  `Paid` tinyint(1) NOT NULL,
  `Customer_ID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `Number` int(6) NOT NULL,
  `Subject` varchar(100) COLLATE utf8_bin NOT NULL,
  `Customer_ID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `sub_lesson`
--

CREATE TABLE `sub_lesson` (
  `Number` int(6) NOT NULL,
  `Sub_Subject` varchar(100) COLLATE utf8_bin NOT NULL,
  `Completed` tinyint(1) NOT NULL,
  `LessonNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Customer_ID` (`Customer_ID`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`Number`),
  ADD KEY `Customer_ID` (`Customer_ID`);

--
-- Indexes for table `sub_lesson`
--
ALTER TABLE `sub_lesson`
  ADD PRIMARY KEY (`Number`),
  ADD KEY `LessonNumber` (`LessonNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `user_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `Number` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_lesson`
--
ALTER TABLE `sub_lesson`
  MODIFY `Number` int(6) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `customer` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_ibfk_1` FOREIGN KEY (`Number`) REFERENCES `customer` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sub_lesson`
--
ALTER TABLE `sub_lesson`
  ADD CONSTRAINT `sub_lesson_ibfk_1` FOREIGN KEY (`Number`) REFERENCES `lesson` (`Number`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
