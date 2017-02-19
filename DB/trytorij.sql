-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2017 at 08:21 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

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
  `ID` int(11) NOT NULL,
  `User_Name` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `costumer`
--

CREATE TABLE `costumer` (
  `ID` int(11) NOT NULL,
  `User_Name` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `Email` varchar(20) COLLATE utf32_unicode_ci NOT NULL,
  `Date_Of_Birth` date DEFAULT NULL,
  `Mobile_Number` varchar(10) COLLATE utf32_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `Number` int(11) NOT NULL,
  `Subject` varchar(300) COLLATE utf32_unicode_ci NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paid_exam`
--

CREATE TABLE `paid_exam` (
  `ID` int(11) NOT NULL,
  `Paid` char(1) COLLATE utf32_unicode_ci NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `ID1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_lesson`
--

CREATE TABLE `sub_lesson` (
  `Sub_Number` int(11) NOT NULL,
  `Subject` varchar(300) COLLATE utf32_unicode_ci NOT NULL,
  `Complete` char(1) COLLATE utf32_unicode_ci NOT NULL,
  `Lessons_Number` int(11) NOT NULL,
  `Lessons_USER_ID` int(11) NOT NULL,
  `Text` mediumtext COLLATE utf32_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL,
  `Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `costumer`
--
ALTER TABLE `costumer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`ID`,`Number`),
  ADD KEY `Lessons_COSTUMER_FK` (`USER_ID`);

--
-- Indexes for table `paid_exam`
--
ALTER TABLE `paid_exam`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Paid_Exam_COSTUMER_FK` (`USER_ID`);

--
-- Indexes for table `sub_lesson`
--
ALTER TABLE `sub_lesson`
  ADD PRIMARY KEY (`ID`,`Number`,`Sub_Number`),
  ADD KEY `Sub_Lesson_Lessons_FK` (`ID`,`Lessons_Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `costumer`
--
ALTER TABLE `costumer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `paid_exam`
--
ALTER TABLE `paid_exam`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sub_lesson`
--
ALTER TABLE `sub_lesson`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `Lessons_COSTUMER_FK` FOREIGN KEY (`USER_ID`) REFERENCES `costumer` (`ID`);

--
-- Constraints for table `paid_exam`
--
ALTER TABLE `paid_exam`
  ADD CONSTRAINT `Paid_Exam_COSTUMER_FK` FOREIGN KEY (`USER_ID`) REFERENCES `costumer` (`ID`);

--
-- Constraints for table `sub_lesson`
--
ALTER TABLE `sub_lesson`
  ADD CONSTRAINT `Sub_Lesson_Lessons_FK` FOREIGN KEY (`ID`,`Lessons_Number`) REFERENCES `lessons` (`ID`, `Number`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
