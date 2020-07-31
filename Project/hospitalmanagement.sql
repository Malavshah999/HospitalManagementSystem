-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 11:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitalmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', '111111', '28-06-2020 10:54:00 AM');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(20) NOT NULL,
  `patient` varchar(25) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(30) NOT NULL,
  `fees` int(10) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(70) NOT NULL,
  `disease` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patient`, `doctor`, `date`, `timeslot`, `fees`, `contact`, `address`, `disease`) VALUES
(1, 'akramulali9723@gmail.com', 'Dr. Anjila Aneja', '2020-06-05', '11:00-12:00 a.m.', 1000, '8145220128', 'hii', 'hii'),
(5, '1@1.com', 'Dr. Monaksh Shah', '2020-07-30', '10:00-11:00 a.m.', 102, '89898', 'aa', 'aa'),
(6, '1@1.com', 'Dr. Amit Shrivastava', '2020-07-30', '1:00-2:00 p.m.', 101, 'aa', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `docFees` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'Cardiologist', 'Dr. Monaksh Shah', 'hii', '10000', 8145220125, 'akjjjjj@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-06-24 10:15:46', NULL),
(2, 'Cardiologist', 'akram', 'mumbai', '10000', 8145220125, 'akramul@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-06-24 10:21:38', NULL),
(3, 'Cardiologist', 'Dr. Monaksh Shah', 'MUMBAI', '10000', 8145220125, 'akramul6@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-06-25 10:50:40', NULL),
(4, 'DENTAL', 'akramul', 'mumbai', '10000', 8145220128, 'akramul67@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-06-25 14:02:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctorsignup`
--

CREATE TABLE `doctorsignup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorsignup`
--

INSERT INTO `doctorsignup` (`id`, `fullname`, `phonenumber`, `email`, `password`) VALUES
(1, 'Sk Akramul', '7045053487', 'akramulali8@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(3, 'Malav', '8355817', 'malav1999@yahoo.com', '1bbd886460827015e5d605ed44252251');

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(16, 'Cardiologist', '2020-06-25 10:49:35', '2020-06-25 10:49:35'),
(17, 'DENTAL', '2020-06-25 11:03:34', '2020-06-25 11:03:34'),
(18, 'DENTAList', '2020-06-25 14:01:40', '2020-06-25 14:01:40');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` enum('male','female','others','') NOT NULL,
  `birthday` date NOT NULL,
  `Contact` int(11) NOT NULL,
  `Postal` int(11) NOT NULL,
  `textarea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `name`, `gender`, `birthday`, `Contact`, `Postal`, `textarea`) VALUES
(2, 'Malav Shah', 'male', '2016-01-01', 222, 11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('male','female','others') NOT NULL,
  `birthday` date NOT NULL,
  `Height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Marital` enum('Single','married','Divorced','Legally Separated','Widowed') NOT NULL,
  `textarea` varchar(50) NOT NULL,
  `disease` varchar(200) NOT NULL,
  `surgeries` varchar(100) NOT NULL,
  `phobia` varchar(50) NOT NULL,
  `medics` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `email`, `gender`, `birthday`, `Height`, `weight`, `Contact`, `Marital`, `textarea`, `disease`, `surgeries`, `phobia`, `medics`) VALUES
(19, 'Malav Shah', 'malav1999@yahoo.com', 'female', '2018-12-31', '22', '22', '222', 'Single', 'a', 'a', 'a', 'a', 'a'),
(20, 'Malav Shah', 'malav1999@yahoo.com', 'female', '2018-12-31', '22', '22', '222', 'Single', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `patientsignup`
--

CREATE TABLE `patientsignup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientsignup`
--

INSERT INTO `patientsignup` (`id`, `fullname`, `phonenumber`, `email`, `password`) VALUES
(1, 'Sk Akramul Ali', '7045053487', 'akramulali8@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(2, 'Sk Akramul', '8145220128', 'akramulali8067@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(3, ' Akramul ali', '4562555582', 'akramulali97234@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(4, 'akrama ali', '8452255622', 'akramulali9723@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(5, 'Malav', '8355817127', 'malav1999@yahoo.com', 'bae5e3208a3c700e3db642b6631e95b9'),
(6, 'Malav shah', '8355817', '1@1.com', '1bbd886460827015e5d605ed44252251'),
(8, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(9, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `quickcontact`
--

CREATE TABLE `quickcontact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `textarea` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quickcontact`
--

INSERT INTO `quickcontact` (`id`, `name`, `email`, `textarea`) VALUES
(1, 'akramul', 'technicalakramul7@gmail.com', 'hiii'),
(2, 'akramul', 'technicalakramul7@gmail.com', 'hiii'),
(3, 'akramul', 'akramulali8@gmail.com', 'hiii'),
(4, 'Sk  Akramul Ali', 'akramulali8067@gmail.com', 'hi'),
(5, 'Sk  Akramul Ali', 'akramulali8067@gmail.com', 'hii'),
(6, 'Sk  Akramul Ali', 'technicalakramul7@gmail.com', 'hhi'),
(7, 'Sk  Akramul Ali', 'technicalakramul7@gmail.com', 'hhi'),
(8, 'akram', 'akramulali8067@gmail.com', 'gg'),
(9, 'Sk  Akramul Ali', 'akramulali8067@gmail.com', 'hiiii'),
(10, 'Malav Shah', 'sagar_shah@ymail.com', 'checkin g about us');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `ID` int(10) NOT NULL,
  `Docid` int(10) DEFAULT NULL,
  `PatientName` varchar(200) DEFAULT NULL,
  `PatientContno` bigint(10) DEFAULT NULL,
  `PatientEmail` varchar(200) DEFAULT NULL,
  `PatientGender` varchar(50) DEFAULT NULL,
  `PatientAdd` mediumtext DEFAULT NULL,
  `PatientAge` int(10) DEFAULT NULL,
  `PatientMedhis` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`ID`, `Docid`, `PatientName`, `PatientContno`, `PatientEmail`, `PatientGender`, `PatientAdd`, `PatientAge`, `PatientMedhis`, `CreationDate`) VALUES
(1, 1, 'akramul', 8145220128, 'akramulali8@gmail.com', 'male', 'hii', 21, 'nothing', '2020-06-24 10:17:55'),
(2, 1, 'akramul', 8145220128, 'akramulali8@gmail.com', 'male', 'hi', 21, 'nothing', '2020-06-24 10:20:33'),
(3, 1, 'akramul', 8145220128, 'akramulali8@gmail.com', 'male', 'MUMBAI', 21, 'NOTHING', '2020-06-25 10:51:26'),
(4, 1, 'akramul ali', 8145220128, 'akramulali88@gmail.com', 'male', 'mumbai', 21, 'nothing', '2020-06-25 14:03:15'),
(5, 1, 'akramul ali sk', 8145220128, 'akramulali8@gmail.com', 'male', 'mumbai', 21, 'mumbai', '2020-06-25 14:10:57'),
(6, 1, 'sk akramul ali', 8145220128, 'akramulali8@gmail.com', 'male', 'mumbai', 21, 'nothing', '2020-06-25 14:17:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorsignup`
--
ALTER TABLE `doctorsignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patientsignup`
--
ALTER TABLE `patientsignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quickcontact`
--
ALTER TABLE `quickcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctorsignup`
--
ALTER TABLE `doctorsignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `patientsignup`
--
ALTER TABLE `patientsignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `quickcontact`
--
ALTER TABLE `quickcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
