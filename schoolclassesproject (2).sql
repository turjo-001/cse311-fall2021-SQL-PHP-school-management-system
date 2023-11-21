-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 01:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolclassesproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classId` varchar(20) NOT NULL,
  `period` varchar(20) NOT NULL,
  `classTime` time NOT NULL,
  `classroomId` int(11) NOT NULL,
  `subjectId` varchar(10) NOT NULL,
  `teacherId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `classroomId` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `roomType` varchar(15) NOT NULL,
  `facilities` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentId` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `mobileNumber` int(11) NOT NULL,
  `fathersName` varchar(100) NOT NULL,
  `mothersName` varchar(100) NOT NULL,
  `dateOfAdmission` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentclasses`
--

CREATE TABLE `studentclasses` (
  `classId` varchar(20) NOT NULL,
  `studentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectId` varchar(10) NOT NULL,
  `requirements` varchar(10) DEFAULT NULL,
  `maxCapacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherId` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `initial` varchar(10) NOT NULL,
  `subjectTaught` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classId`),
  ADD KEY `classroomId` (`classroomId`),
  ADD KEY `subjectId` (`subjectId`),
  ADD KEY `teacherId` (`teacherId`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`classroomId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentId`);

--
-- Indexes for table `studentclasses`
--
ALTER TABLE `studentclasses`
  ADD KEY `classId` (`classId`),
  ADD KEY `studentId` (`studentId`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectId`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`classroomId`) REFERENCES `classroom` (`classroomId`),
  ADD CONSTRAINT `class_ibfk_2` FOREIGN KEY (`subjectId`) REFERENCES `subject` (`subjectId`),
  ADD CONSTRAINT `class_ibfk_3` FOREIGN KEY (`teacherId`) REFERENCES `teacher` (`teacherId`);

--
-- Constraints for table `studentclasses`
--
ALTER TABLE `studentclasses`
  ADD CONSTRAINT `studentclasses_ibfk_1` FOREIGN KEY (`classId`) REFERENCES `class` (`classId`),
  ADD CONSTRAINT `studentclasses_ibfk_2` FOREIGN KEY (`studentId`) REFERENCES `student` (`studentId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
