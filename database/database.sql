-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 06:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitylog`
--

CREATE TABLE `activitylog` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activitylog`
--

INSERT INTO `activitylog` (`id`, `user`, `activity`, `date`, `time`) VALUES
(158, 'HT-2223-7572', 'Imported files in Grades ', 'Mar-27-2023 12:12:05 PM', '');

-- --------------------------------------------------------

--
-- Table structure for table `cstatus`
--

CREATE TABLE `cstatus` (
  `id` int(5) NOT NULL,
  `civil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cstatus`
--

INSERT INTO `cstatus` (`id`, `civil`) VALUES
(1, ''),
(2, 'Single'),
(3, 'Married'),
(4, 'Divorced'),
(5, 'Widowed');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(4) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `gender`) VALUES
(1, ''),
(2, 'Male'),
(3, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`) VALUES
(3, ''),
(4, 'First Semester'),
(5, 'Second Semester');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

CREATE TABLE `studentdetails` (
  `id` int(11) NOT NULL,
  `studid` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `foccu` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `moccu` varchar(50) NOT NULL,
  `gname` varchar(50) NOT NULL,
  `gcontact` varchar(20) NOT NULL,
  `famname` varchar(255) NOT NULL,
  `mamname` varchar(255) NOT NULL,
  `gamname` varchar(255) NOT NULL,
  `falname` varchar(255) NOT NULL,
  `galname` varchar(255) NOT NULL,
  `malname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`id`, `studid`, `fname`, `foccu`, `mname`, `moccu`, `gname`, `gcontact`, `famname`, `mamname`, `gamname`, `falname`, `galname`, `malname`) VALUES
(1, 'HS-2223-1001', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', '639999999999', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex'),
(2, 'HS-2223-1002', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', '639999999999', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex'),
(3, 'HS-2223-1003', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', '639999999999', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex'),
(4, 'HS-2223-1004', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', '639999999999', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex'),
(5, 'HS-2223-1005', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', '639999999999', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex'),
(6, 'HS-2223-1006', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', '639999999999', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex'),
(7, 'HS-2223-1007', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', '639999999999', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex'),
(8, 'HS-2223-1008', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', '639999999999', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex'),
(9, 'HS-2223-1009', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', '639999999999', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex'),
(10, 'HS-2223-1010', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', '639999999999', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex'),
(11, 'HS-2223-1011', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', '639999999999', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex'),
(12, 'HS-2223-1012', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', '639999999999', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex', 'Alex');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `teacherid` varchar(244) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `extname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `cstatus` varchar(255) NOT NULL,
  `bday` varchar(255) NOT NULL,
  `title` varchar(20) NOT NULL,
  `sy` varchar(10) NOT NULL,
  `advisory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `user_name`, `password`, `teacherid`, `email`, `name`, `mname`, `lname`, `extname`, `address`, `religion`, `gender`, `age`, `contact`, `nationality`, `cstatus`, `bday`, `title`, `sy`, `advisory`) VALUES
(10, 'HT-2223-7572', 'Mamaril', 'HT-2223-7572', 'asdasd@gmail.com', 'Gerald', 'Palaganas', 'Mamaril', 'Sr', 'Asin West, Malasiqui Pangasinan', 'catholic', 'Male', '25', '12355123', 'qwe', 'Married', '2023-03-04', 'School Principal IV', '2022-2023', 'Grade 8 - Orchid');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmintype`
--

CREATE TABLE `tbladmintype` (
  `id` int(11) NOT NULL,
  `admintype` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmintype`
--

INSERT INTO `tbladmintype` (`id`, `admintype`) VALUES
(5, ''),
(6, 'Super Admin'),
(7, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblextname`
--

CREATE TABLE `tblextname` (
  `id` int(11) NOT NULL,
  `extname` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblextname`
--

INSERT INTO `tblextname` (`id`, `extname`) VALUES
(1, ' '),
(2, 'Sr'),
(3, 'Jr'),
(4, 'I'),
(5, 'II'),
(6, 'III'),
(7, 'IV'),
(8, 'V'),
(9, 'VI');

-- --------------------------------------------------------

--
-- Table structure for table `tblgrading`
--

CREATE TABLE `tblgrading` (
  `id` int(11) NOT NULL,
  `studentid` varchar(255) NOT NULL,
  `subj` varchar(255) NOT NULL,
  `subjcode` varchar(255) NOT NULL,
  `sched` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `fgrading` int(2) NOT NULL,
  `sgrading` int(2) NOT NULL,
  `tgrading` int(2) NOT NULL,
  `rgrading` int(2) NOT NULL,
  `finalgrade` varchar(5) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblgrading`
--

INSERT INTO `tblgrading` (`id`, `studentid`, `subj`, `subjcode`, `sched`, `teacher`, `fgrading`, `sgrading`, `tgrading`, `rgrading`, `finalgrade`, `remarks`) VALUES
(0, 'HS-2223-1001', 'FILIPINO', 'FIL01', 'M/T/W/TH/F 7:30AM - 8:30AM', '', 98, 98, 98, 98, '98', 'PASSED'),
(61, 'HS-2223-1001', 'ENGLISH', 'ENG01', 'M/T/W/TH/F 8:30AM - 9:30AM', '', 0, 0, 0, 0, '', ''),
(62, 'HS-2223-1001', 'MATHEMATICS', 'MAT01', 'M/T/W/TH/F 10:00AM - 11:00AM', '', 0, 0, 0, 0, '', ''),
(63, 'HS-2223-1001', 'SCIENCE', 'SCI01', 'M/T/W/TH/F 11:00AM - 12:00NN ', '', 0, 0, 0, 0, '', ''),
(64, 'HS-2223-1001', 'ARALING PANLIPUNAN', 'ARA01', 'M/T/W/TH/F 1:00PM - 2:00PM', '', 0, 0, 0, 0, '', ''),
(65, 'HS-2223-1001', 'EDUKASYON SA PAGPAPAKATAO', 'EDU01', 'M/T/W/TH/F 2:00PM - 3:00PM', '', 0, 0, 0, 0, '', ''),
(66, 'HS-2223-1001', 'MAPEH', 'MAP01', 'M/T/W/TH/F 3:30PM - 4:30PM', '', 0, 0, 0, 0, '', ''),
(67, 'HS-2223-1001', 'TLE(Beaty/Nail Care & Wellness Massage)', 'TLE01', 'M/T/W/TH/F 4:30PM - 5:30PM', '', 0, 0, 0, 0, '', ''),
(68, 'HS-2223-1003', 'FILIPINO', 'FIL02', 'M/T/W/TH/F 7:30AM - 8:30AM', '', 0, 0, 0, 0, '', ''),
(69, 'HS-2223-1003', 'ENGLISH', 'ENG02', 'M/T/W/TH/F 8:30AM - 9:30AM', '', 0, 0, 0, 0, '', ''),
(70, 'HS-2223-1003', 'MATHEMATICS', 'MAT02', 'M/T/W/TH/F 10:00AM - 11:00AM', '', 0, 0, 0, 0, '', ''),
(71, 'HS-2223-1003', 'SCIENCE', 'SCI02', '1M/T/W/TH/F 1:00AM - 12:00NN ', '', 0, 0, 0, 0, '', ''),
(72, 'HS-2223-1003', 'ARALING PANLIPUNAN', 'ARA02', 'M/T/W/TH/F 1:00PM - 2:00PM', '', 0, 0, 0, 0, '', ''),
(73, 'HS-2223-1003', 'EDUKASYON SA PAGPAPAKATAO', 'EDU02', 'M/T/W/TH/F 2:00PM - 3:00PM', '', 0, 0, 0, 0, '', ''),
(74, 'HS-2223-1003', 'MAPEH', 'MAP02', 'M/T/W/TH/F 3:30PM - 4:30PM', '', 0, 0, 0, 0, '', ''),
(75, 'HS-2223-1003', 'TLE(Beaty/Nail Care & Wellness Massage)', 'TLE02', 'M/T/W/TH/F 4:30PM - 5:30PM', '', 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblgsection`
--

CREATE TABLE `tblgsection` (
  `id` int(11) NOT NULL,
  `gsection` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblroom`
--

CREATE TABLE `tblroom` (
  `id` int(11) NOT NULL,
  `roomnum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblschedule`
--

CREATE TABLE `tblschedule` (
  `id` int(11) NOT NULL,
  `sched` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblschedule`
--

INSERT INTO `tblschedule` (`id`, `sched`) VALUES
(1, '7:30am - 8:30am'),
(2, '8:30am - 9:30am'),
(3, '10:00am - 11:00am'),
(4, '11:00am - 12:00nn'),
(5, '1:00pm - 2:00pm'),
(6, '2:00pm - 3:00pm'),
(7, '3:30pm - 4:30pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblscholastic`
--

CREATE TABLE `tblscholastic` (
  `id` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblscholastic`
--

INSERT INTO `tblscholastic` (`id`, `Status`) VALUES
(8, ''),
(9, 'Grade 7'),
(10, 'Grade 8'),
(11, 'Grade 9'),
(12, 'Grade 10'),
(13, 'Grade 11'),
(14, 'Grade 12');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `extname` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `cstatus` varchar(50) NOT NULL,
  `bday` varchar(20) NOT NULL,
  `age` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sstatus` varchar(10) NOT NULL,
  `grade` varchar(25) NOT NULL,
  `adviser` varchar(50) NOT NULL,
  `sy` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`id`, `user_name`, `password`, `studentid`, `name`, `mname`, `lname`, `extname`, `gender`, `cstatus`, `bday`, `age`, `nationality`, `religion`, `contact`, `address`, `email`, `sstatus`, `grade`, `adviser`, `sy`) VALUES
(1, 'HS-2223-1001', 'palaganas11', 'HS-2223-1001', 'Meljane', 'Cruz', 'Castro', '', 'Female', 'Single', '3/23/2010', '13', 'Filipino', 'Catholic', '639600346837', 'Malasiqui, Pangasinan', 'cmeljane@gmail.com', 'Grade 7', 'Grade 7 Bonifacio', '', '2022-2023'),
(2, 'HS-2223-1002', 'Faith', 'HS-2223-1002', 'Alexandra ', 'Garcia', 'Faith', '', 'Female', 'Single', '4/1/2010', '12', 'Filipino', 'Catholic', '639153464108', 'Malasiqui, Pangasinan', 'Afaith@gmail.com', 'Grade 7', 'Grade 7 Rizal', '', '2022-2023'),
(3, 'HS-2223-1003', 'Gomez', 'HS-2223-1003', 'Alden', 'Richards', 'Gomez', 'Jr', 'Male', 'Single', '6/18/2009', '13', 'Filipino', 'Catholic', '639153464109', 'Malasiqui, Pangasinan', 'Agomez@gmail.com', 'Grade 8', 'Grade 8 Camia', '', '2022-2023'),
(4, 'HS-2223-1004', 'Lee', 'HS-2223-1004', 'Armando', 'Nicolas', 'Lee', 'III', 'Male', 'Single', '7/18/2009', '13', 'Filipino', 'Catholic', '639153464110', 'Malasiqui, Pangasinan', 'Alee@gmail.com', 'Grade 8', 'Grade 8 Orchids', '', '2022-2023'),
(5, 'HS-2223-1005', 'Legazpi', 'HS-2223-1005', 'Thalia', 'Alynna', 'Legazpi', '', 'Female', 'Single', '7/18/2008', '14', 'Filipino', 'Catholic', '639153464111', 'Malasiqui, Pangasinan', 'tlegazpi@gmail.com', 'Grade 9', 'Grade 9 Eagle', '', '2022-2023'),
(6, 'HS-2223-1006', 'Melendez', 'HS-2223-1006', 'Mcwalter', 'Lee', 'Melendez', '', 'Male', 'Single', '7/18/2008', '14', 'Filipino', 'Catholic', '639153464112', 'Malasiqui, Pangasinan', 'mmelendez@gmail.com', 'Grade 9', 'Grade 9 Peacock', '', '2022-2023'),
(7, 'HS-2223-1007', 'Albuera', 'HS-2223-1007', 'Adrian', 'Agustin', 'Albuera', '', 'Male', 'Single', '7/18/2007', '15', 'Filipino', 'Catholic', '639153464113', 'Malasiqui, Pangasinan', 'aalbuera@gmail.com', 'Grade 10', 'Grade 10 Sapphire', '', '2022-2023'),
(8, 'HS-2223-1008', 'Estrada', 'HS-2223-1008', 'Gabril', 'Mercado', 'Estrada', 'II', 'Male', 'Single', '7/18/2007', '15', 'Filipino', 'Catholic', '639153464114', 'Malasiqui, Pangasinan', 'gestrada@gmail.com', 'Grade 10', 'Grade 10 Emerald', '', '2022-2023'),
(9, 'HS-2223-1009', 'Andres', 'HS-2223-1009', 'Jelia', '', 'Andres', '', 'Female', 'Single', '7/18/2006', '16', 'Filipino', 'Catholic', '639153464115', 'Malasiqui, Pangasinan', 'jandress@gmail.com', 'Grade 11', 'Grade 11 Athena', '', '2022-2023'),
(10, 'HS-2223-1010', 'Decena', 'HS-2223-1010', 'Katerine', 'Solis', 'Decena', '', 'Female', 'Single', '7/18/2006', '16', 'Filipino', 'Catholic', '639153464116', 'Malasiqui, Pangasinan', 'kdecena@gmail.com', 'Grade 11', 'Grade 11 Zeus', '', '2022-2023'),
(11, 'HS-2223-1011', 'Domantay', 'HS-2223-1011', 'Matthew', 'Soriano', 'Domantay', '', 'Male', 'Single', '7/18/2005', '17', 'Filipino', 'Catholic', '639153464117', 'Malasiqui, Pangasinan', 'mdomantay@gmail.com', 'Grade 12', 'Grade 12 Venus', '', '2022-2023'),
(12, 'HS-2223-1012', 'Mulawin', 'HS-2223-1012', 'Donnalyn', 'Palaganas', 'Mulawin', '', 'Female', 'Single', '7/18/2005', '17', 'Filipino', 'Catholic', '639153464118', 'Malasiqui, Pangasinan', 'dmulawin@gmail.com', 'Grade12', 'Grade 12 Jupiter', '', '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjlist`
--

CREATE TABLE `tblsubjlist` (
  `id` int(11) NOT NULL,
  `subj` varchar(255) NOT NULL,
  `subjcode` varchar(200) NOT NULL,
  `sstaus` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `sched` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsubjlist`
--

INSERT INTO `tblsubjlist` (`id`, `subj`, `subjcode`, `sstaus`, `semester`, `sched`, `room`, `teacher`) VALUES
(1, 'FILIPINO', 'FIL01', 'Grade 7', '', 'M/T/W/TH/F 7:30AM - 8:30AM', '', ''),
(2, 'ENGLISH', 'ENG01', 'Grade 7', '', 'M/T/W/TH/F 8:30AM - 9:30AM', '', ''),
(3, 'MATHEMATICS', 'MAT01', 'Grade 7', '', 'M/T/W/TH/F 10:00AM - 11:00AM', '', ''),
(4, 'SCIENCE', 'SCI01', 'Grade 7', '', 'M/T/W/TH/F 11:00AM - 12:00NN ', '', ''),
(5, 'ARALING PANLIPUNAN', 'ARA01', 'Grade 7', '', 'M/T/W/TH/F 1:00PM - 2:00PM', '', ''),
(6, 'EDUKASYON SA PAGPAPAKATAO', 'EDU01', 'Grade 7', '', 'M/T/W/TH/F 2:00PM - 3:00PM', '', ''),
(7, 'MAPEH', 'MAP01', 'Grade 7', '', 'M/T/W/TH/F 3:30PM - 4:30PM', '', ''),
(8, 'TLE(Beaty/Nail Care & Wellness Massage)', 'TLE01', 'Grade 7', '', 'M/T/W/TH/F 4:30PM - 5:30PM', '', ''),
(9, 'FILIPINO', 'FIL02', 'Grade 8', '', 'M/T/W/TH/F 7:30AM - 8:30AM', '', ''),
(10, 'ENGLISH', 'ENG02', 'Grade 8', '', 'M/T/W/TH/F 8:30AM - 9:30AM', '', ''),
(11, 'MATHEMATICS', 'MAT02', 'Grade 8', '', 'M/T/W/TH/F 10:00AM - 11:00AM', '', ''),
(12, 'SCIENCE', 'SCI02', 'Grade 8', '', '1M/T/W/TH/F 1:00AM - 12:00NN ', '', ''),
(13, 'ARALING PANLIPUNAN', 'ARA02', 'Grade 8', '', 'M/T/W/TH/F 1:00PM - 2:00PM', '', ''),
(14, 'EDUKASYON SA PAGPAPAKATAO', 'EDU02', 'Grade 8', '', 'M/T/W/TH/F 2:00PM - 3:00PM', '', ''),
(15, 'MAPEH', 'MAP02', 'Grade 8', '', 'M/T/W/TH/F 3:30PM - 4:30PM', '', ''),
(16, 'TLE(Beaty/Nail Care & Wellness Massage)', 'TLE02', 'Grade 8', '', 'M/T/W/TH/F 4:30PM - 5:30PM', '', ''),
(17, 'FILIPINO', 'FIL03', 'Grade 9', '', 'M/T/W/TH/F 7:30AM - 8:30AM', '', ''),
(18, 'ENGLISH', 'ENG03', 'Grade 9', '', 'M/T/W/TH/F 8:30AM - 9:30AM', '', ''),
(19, 'MATHEMATICS', 'MAT03', 'Grade 9', '', 'M/T/W/TH/F 10:00AM - 11:00AM', '', ''),
(20, 'SCIENCE', 'SCI03', 'Grade 9', '', 'M/T/W/TH/F 11:00AM - 12:00NN ', '', ''),
(21, 'ARALING PANLIPUNAN', 'ARA03', 'Grade 9', '', 'M/T/W/TH/F 1:00PM - 2:00PM', '', ''),
(22, 'EDUKASYON SA PAGPAPAKATAO', 'EDU03', 'Grade 9', '', 'M/T/W/TH/F 2:00PM - 3:00PM', '', ''),
(23, 'MAPEH', 'MAP03', 'Grade 9', '', 'M/T/W/TH/F 3:30PM - 4:30PM', '', ''),
(24, 'TLE(Beaty/Nail Care & Wellness Massage)', 'TLE03', 'Grade 9', '', 'M/T/W/TH/F 4:30PM - 5:30PM', '', ''),
(25, 'FILIPINO', 'FIL04', 'Grade 10', '', 'M/T/W/TH/F 7:30AM - 8:30AM', '', ''),
(26, 'ENGLISH', 'ENG04', 'Grade 10', '', 'M/T/W/TH/F 8:30AM - 9:30AM', '', ''),
(27, 'MATHEMATICS', 'MAT04', 'Grade 10', '', 'M/T/W/TH/F 10:00AM - 11:00AM', '', ''),
(28, 'SCIENCE', 'SCI04', 'Grade 10', '', '1M/T/W/TH/F 1:00AM - 12:00NN ', '', ''),
(29, 'ARALING PANLIPUNAN', 'ARA04', 'Grade 10', '', 'M/T/W/TH/F 1:00PM - 2:00PM', '', ''),
(30, 'EDUKASYON SA PAGPAPAKATAO', 'EDU04', 'Grade 10', '', 'M/T/W/TH/F 2:00PM - 3:00PM', '', ''),
(31, 'MAPEH', 'MAP04', 'Grade 10', '', 'M/T/W/TH/F 3:30PM - 4:30PM', '', ''),
(32, 'TLE(Beaty/Nail Care & ICT)', 'TLE04', 'Grade 10', '', 'M/T/W/TH/F 4:30PM - 5:30PM', '', ''),
(33, 'Oral Communication', 'Ora011', 'Grade 11', 'First Semester', 'M/W 7:30AM - 8:30AM', '', ''),
(34, 'Earth & Life Science', 'Ear011', 'Grade 11', 'First Semester', 'M/W 8:30AM - 9:30AM', '', ''),
(35, 'Understanding Culture, Society & Politics', 'Und011', 'Grade 11', 'First Semester', 'M/W 10:00AM - 11:00AM', '', ''),
(36, 'Introduction to Philosophy', 'Int011', 'Grade 11', 'First Semester', 'M/W 11:00AM - 12:00AM', '', ''),
(37, 'General Mathematics', 'Gen011', 'Grade 11', 'First Semester', 'T/TH 7:30AM - 8:30AM', '', ''),
(38, 'English for Academic & Professional Purpose', 'Eng011', 'Grade 11', 'First Semester', 'T/TH 8:30AM - 9:30AM', '', ''),
(39, 'Physical Education', 'Phy011', 'Grade 11', 'First Semester', 'T/TH 10:00AM - 11:00AM', '', ''),
(40, 'Computer System Servicing', 'Com011', 'Grade 11', 'First Semester', 'F 7:30AM - 9:00AM', '', ''),
(41, 'Wellness Massage', 'Wel011', 'Grade 11', 'First Semester', 'F 9:30AM - 11:00AM', '', ''),
(42, 'Pagbasa at Pagsusuri ng Ibat Ibang Teksto Tungo sa Pananaliksik', 'Pag02', 'Grade 11  ', 'Second Semester', 'M/W 7:30AM - 8:30AM', '', ''),
(43, 'Komunikasyon at Pananaliksik sa Wika at Kulturang Pilipino', 'Kom02', 'Grade 11  ', 'Second Semester', 'M/W 8:30AM - 9:30AM', '', ''),
(44, 'Physical Science', 'Phy02', 'Grade 11  ', 'Second Semester', 'M/W 10:00AM - 11:00AM', '', ''),
(45, '21st Century Literature from the Philippines and World', '21s02', 'Grade 11  ', 'Second Semester', 'T/TH 11:00AM - 12:00AM', '', ''),
(46, 'Entrepreneurship', 'Ent02', 'Grade 11  ', 'Second Semester', 'F 7:30AM - 9:00AM', '', ''),
(47, 'Practical Research I', 'Pra02', 'Grade 11  ', 'Second Semester', 'F 9:30AM - 11:00AM', '', ''),
(48, 'Statistics and Probability', 'Sta02', 'Grade 11  ', 'Second Semester', 'T/TH 7:30AM - 8:30AM', '', ''),
(49, 'PE and Health', 'PE 02', 'Grade 11  ', 'Second Semester', 'T/TH 8:30AM - 9:30AM', '', ''),
(50, 'Pagsulat sa Filipino sa Piling Larang', 'Pag03', 'Grade 12', 'First Semester', 'M/W 1:00PM - 2:00PM', '', ''),
(51, 'Contemporary Arts of Philippines from Regions', 'Con03', 'Grade 12', 'First Semester', 'M/W 2:00PM - 3:00PM', '', ''),
(52, 'Personality Development', 'Per03', 'Grade 12', 'First Semester', 'M/W 3:00PM - 4:30PM', '', ''),
(53, 'Media & Information Literacy', 'Med03', 'Grade 12', 'First Semester', 'T/TH 1:00PM - 2:00PM', '', ''),
(54, 'Practical Research II', 'Pra03', 'Grade 12', 'First Semester', 'F 1:00PM - 2:00PM', '', ''),
(55, 'PE and Health', 'PE 03', 'Grade 12', 'First Semester', 'T/TH 2:00PM - 3:PM', '', ''),
(56, 'Beauty/Nail Care & Computer System Servicing', 'Bea03', 'Grade 12', 'First Semester', 'F 2:00PM - 3:00PM', '', ''),
(57, 'Practical Research II', 'Pra04', 'Grade 12', 'Second Semester', 'M/T/W/TH/F 1:00PM - 2:00PM', '', ''),
(58, 'Inquiry', 'Inq04', 'Grade 12', 'Second Semester', 'M/T/W/TH/F 2:00PM - 3:00PM', '', ''),
(59, 'Inquiries, Investagation, Immersion', 'Inq05', 'Grade 12', 'Second Semester', 'M/T/W/TH/F 3:00PM - 4:30PM', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblsy`
--

CREATE TABLE `tblsy` (
  `id` int(11) NOT NULL,
  `sy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsy`
--

INSERT INTO `tblsy` (`id`, `sy`) VALUES
(1, '2022-2023\r\n'),
(2, '2021-2022'),
(3, '2020-2021'),
(4, '2019-2020'),
(5, '2018-2019');

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `id` int(11) NOT NULL,
  `teacherid` varchar(20) NOT NULL,
  `prefix` varchar(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `extname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `cstatus` varchar(255) NOT NULL,
  `bdate` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `title` varchar(200) NOT NULL,
  `advisory` varchar(50) NOT NULL,
  `sy` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`id`, `teacherid`, `prefix`, `name`, `mname`, `lname`, `extname`, `address`, `religion`, `gender`, `age`, `contact`, `nationality`, `cstatus`, `bdate`, `email`, `title`, `advisory`, `sy`) VALUES
(1, 'HT-2223-0100', 'Mr.', 'Belle Clifford', 'O', 'Neduasa', '', 'Malasiqui, Pangasinan', '', 'Male', '26', '639808651498', 'Filipino', 'Married', '3/21/1997', 'bneduasa@gmail.com', 'Teacher III', 'Grade 7 Bonifacio', '2022-2023'),
(2, 'HT-2223-0101', 'Mrs.', 'Riza', 'G', 'Castillo', '', 'Malasiqui, Pangasinan', '', 'Female', '24', '639413038824', 'Filipino', 'Married', '2/14/1999', 'rcastillo@gmail.com', 'Teacher I', 'Grade 7 Rizal', '2022-2023'),
(3, 'HT-2223-0102', 'Mr.', 'Romel', 'I', 'Macaranas', '', 'Malasiqui, Pangasinan', '', 'Male', '30', '639594266929', 'Filipino', 'Married', '1/1/1993', 'rmacaranas@gmail.com', 'Teacher III', 'Grade 8 Camia', '2022-2023'),
(4, 'HT-2223-0103', 'Mr', 'Royet', 'C', 'Cayabyab', '', 'Malasiqui, Pangasinan', '', 'Male', '25', '639564272092', 'Filipino', 'Single', '2/14/1998', 'rcayabyab@gmail.com', 'Teacher III', 'Grade 8 Orchids', '2022-2023'),
(5, 'HT-2223-0104', 'Mrs.', 'Jovelyn', 'O', 'Bianson', '', 'Malasiqui, Pangasinan', '', 'Female', '29', '639113672920', 'Filipino', 'Married', '1/28/1994', 'jbianson@gmail.com', 'Teacher III', 'Grade 9 Eagle', '2022-2023'),
(6, 'HT-2223-0105', 'Mrs.', 'Jennifer', 'S', 'Cayabyab', '', 'Malasiqui, Pangasinan', '', 'Female', '24', '639135176479', 'Filipino', 'Married', '2/15/1999', 'jcayabyab@gmail.com', 'Teacher III', 'Grade 9 Peacock', '2022-2023'),
(7, 'HT-2223-0106', 'Mrs.', 'Christine', 'C', 'Maure', '', 'Malasiqui, Pangasinan', '', 'Female', '25', '639147074860', 'Filipino', 'Married', '3/14/1998', 'cmaure@gmail.com', 'Teacher I', 'Grade 10 Sapphire', '2022-2023'),
(8, 'HT-2223-0107', 'Ms.', 'Ricajoy', 'V', 'Ibuan', '', 'Malasiqui, Pangasinan', '', 'Female', '23', '639673689339', 'Filipino', 'Single', '1/25/2000', 'ribuan@gmail.com', 'Teacher I', 'Grade 10 Emerald', '2022-2023'),
(9, 'HT-2223-0108', 'Ms.', 'Mary Joy', 'I', 'Caranga', '', 'Malasiqui, Pangasinan', '', 'Female', '26', '639923069595', 'Filipino', 'Single', '2/21/1997', 'mcaranga@gmail.com', 'Teacher II', 'Grade 11 Athena', '2022-2023'),
(10, 'HT-2223-0109', 'Mr', 'Jericho', '', 'Mejia', '', 'Malasiqui, Pangasinan', '', 'Male', '28', '639916810704', 'Filipino', 'Married', '1/11/1995', 'jmejia@gmail.com', 'Teacher II', 'Grade 11 Zeus', '2022-2023'),
(11, 'HT-2223-0110', 'Ms.', 'Cherry', 'S', 'Catungal', '', 'Malasiqui, Pangasinan', '', 'Female', '25', '639935709533', 'Filipino', 'Single', '3/20/1998', 'ccatungal@gmail.com', 'Teacher II', 'Grade 12 Venus', '2022-2023'),
(12, 'HT-2223-0111', 'MR', 'Jonathan', 'S', 'Mina', '', 'Malasiqui, Pangasinan', '', 'Male', '27', '639843312508', 'Filipino', 'Married', '3/10/1996', 'jmina@gmail.com', 'Teacher II', 'Grade 12 Jupiter', '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `tbltitle`
--

CREATE TABLE `tbltitle` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbltitle`
--

INSERT INTO `tbltitle` (`id`, `title`) VALUES
(1, 'Teacher I'),
(2, 'Teacher II'),
(3, 'Teacher III'),
(4, 'Master Teacher I'),
(5, 'Master Teacher II'),
(6, 'Master Teacher III'),
(7, 'Master Teacher IV'),
(8, 'Head Teacher I'),
(9, 'Head Teacher II'),
(10, 'Head Teacher III'),
(11, 'Head Teacher IV'),
(12, 'Head Teacher V'),
(13, 'Asst. School Principal I'),
(14, 'Asst. School Principal II'),
(15, 'Asst. School Principal III'),
(16, 'School Principal I'),
(17, 'School Principal II'),
(18, 'School Principal III'),
(19, 'School Principal IV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylog`
--
ALTER TABLE `activitylog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cstatus`
--
ALTER TABLE `cstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmintype`
--
ALTER TABLE `tbladmintype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblextname`
--
ALTER TABLE `tblextname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblgrading`
--
ALTER TABLE `tblgrading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblgsection`
--
ALTER TABLE `tblgsection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblroom`
--
ALTER TABLE `tblroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblschedule`
--
ALTER TABLE `tblschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblscholastic`
--
ALTER TABLE `tblscholastic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubjlist`
--
ALTER TABLE `tblsubjlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsy`
--
ALTER TABLE `tblsy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltitle`
--
ALTER TABLE `tbltitle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylog`
--
ALTER TABLE `activitylog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `cstatus`
--
ALTER TABLE `cstatus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbladmintype`
--
ALTER TABLE `tbladmintype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblextname`
--
ALTER TABLE `tblextname`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblgrading`
--
ALTER TABLE `tblgrading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tblgsection`
--
ALTER TABLE `tblgsection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tblroom`
--
ALTER TABLE `tblroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblschedule`
--
ALTER TABLE `tblschedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblscholastic`
--
ALTER TABLE `tblscholastic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tblsubjlist`
--
ALTER TABLE `tblsubjlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `tblsy`
--
ALTER TABLE `tblsy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbltitle`
--
ALTER TABLE `tbltitle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
