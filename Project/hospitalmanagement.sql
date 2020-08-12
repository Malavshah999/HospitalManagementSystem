-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 01:58 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `updationDate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', 'Test@8768', '01-08-2020 08:35:03 PM');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(20) NOT NULL,
  `patient` varchar(50) NOT NULL,
  `doctor` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(25) NOT NULL,
  `fees` int(10) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `disease` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patient`, `doctor`, `date`, `timeslot`, `fees`, `contact`, `address`, `disease`) VALUES
(3, 'akramulali8067@gmail.com', 'Swaroop Gopal', '2020-12-31', '1:00-2:00 p.m.', 100, '7045053487', 'mumbai', 'no'),
(4, 'akramulali8@gmail.com', 'Mr. Swaroop Gopal', '2020-12-31', '9:00-10:00 a.m.', 100, '8145220128', 'mumbai', 'no'),
(5, 'akramulali972348@gmail.com', 'akram', '2020-12-31', '2:00-3:00 p.m.', 100, '8145222222', 'mumbai', 'no'),
(6, 'akramulali972348@gmail.com', 'Dr. Anjila Aneja', '2020-12-31', '6:00-7:00 p.m.', 100, '8145220128', 'mumbai', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `phone`, `message`) VALUES
('Sk  Akramul Ali', 'technicalakramul7@gmail.com', '8145220128', 'hi'),
('SK AKRAMUL ALI', 'akramulali97234@gmail.com', '8145220128', 'hii'),
('Sk  Akramul Ali', 'akramulali97234@gmail.com', '8145220128', 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) NOT NULL,
  `specilization` varchar(20) DEFAULT NULL,
  `doctorName` varchar(20) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `docFees` varchar(20) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `docEmail` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(21, 'Cardiologist', 'Dr. Monaksh Shah', 'mumbai', '1000', 8145220125, 'akramul690@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-08-07 04:04:03', NULL),
(22, 'Neurology', 'akram', 'mumbai', '1000', 7045053487, 'akramul69@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-08-07 04:08:08', NULL),
(23, 'Neurology', 'Dr. Amit Shrivastava', 'mumbai', '2000', 8145220120, 'akramul6709@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-08-07 04:15:16', NULL),
(24, 'Gastroenterology', 'Swaroop Gopal', 'mumbai', '3000', 8145220129, 'akramul68@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-08-07 04:16:13', NULL),
(25, 'Cardiologist', 'akram', 'mumbai', '1000', 8145220125, 'akramul6900@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-08-08 10:15:48', NULL),
(26, 'Neurology', 'akramul', 'mumbai', '2000', 8145220129, 'akramulali69@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-08-08 13:39:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctorsignup`
--

CREATE TABLE `doctorsignup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorsignup`
--

INSERT INTO `doctorsignup` (`id`, `fullname`, `phonenumber`, `email`, `password`) VALUES
(1, 'Sk Akramul Ali', '8145220128', 'akramulali998@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(2, 'Sk Akramul Ali', '8145220128', 'akramulali798@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(3, 'Sk Akramul Ali', '7045053487', 'akramulali79989@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(25) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'Cardiologist', '2020-08-07 03:28:57', '2020-08-07 03:28:57'),
(2, 'Neurology', '2020-08-07 03:29:23', '2020-08-07 03:29:23'),
(3, 'Gastroenterology', '2020-08-07 03:29:38', '2020-08-07 03:29:38'),
(4, 'Cardiology', '2020-08-07 03:29:47', '2020-08-07 03:29:47'),
(5, 'Gynaecologist', '2020-08-07 03:29:59', '2020-08-07 03:29:59'),
(6, 'Surgery', '2020-08-07 03:30:06', '2020-08-07 03:30:06'),
(7, 'Neurology', '2020-08-07 03:30:14', '2020-08-07 03:30:14'),
(30, 'DENTAL', '2020-08-08 13:38:05', '2020-08-08 13:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` enum('male','female','others','') NOT NULL,
  `birthday` date NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Postal` int(11) NOT NULL,
  `textarea` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `name`, `gender`, `birthday`, `Contact`, `Postal`, `textarea`) VALUES
(5, 'Sk  Akramul Ali', 'male', '2020-12-30', '8145220128', 400011, 'mumbai'),
(6, 'SK AKRAMUL ALI', 'male', '2019-12-31', '8145220128', 400011, 'mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` enum('male','female','others') NOT NULL,
  `birthday` date NOT NULL,
  `Height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Marital` enum('Single','married','Divorced','Legally Separated','Widowed') NOT NULL,
  `textarea` varchar(50) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `surgeries` varchar(100) NOT NULL,
  `phobia` varchar(100) NOT NULL,
  `medics` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `email`, `gender`, `birthday`, `Height`, `weight`, `Contact`, `Marital`, `textarea`, `disease`, `surgeries`, `phobia`, `medics`) VALUES
(19, 'Malav Shah', 'malav1999@yahoo.com', 'female', '2018-12-31', '22', '22', '222', 'Single', 'a', 'a', 'a', 'a', 'a'),
(20, 'Malav Shah', 'malav1999@yahoo.com', 'female', '2018-12-31', '22', '22', '222', 'Single', 'a', 'a', 'a', 'a', 'a'),
(21, 'Sk  Akramul Ali', 'technicalakramul7@gmail.c', 'male', '2020-08-07', '7', '50', '8145220128', 'Single', 'mumbai', 'no', 'na', 'na', 'na'),
(22, 'Sk  Akramul Ali', 'technicalakramul7@gmail.com', 'male', '2020-12-31', '7', '50', '8145220128', 'Single', 'mumbai', 'no', 'na', 'na', 'na');

-- --------------------------------------------------------

--
-- Table structure for table `patientsignup`
--

CREATE TABLE `patientsignup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientsignup`
--

INSERT INTO `patientsignup` (`id`, `fullname`, `phonenumber`, `email`, `password`) VALUES
(1, 'Sk Akramul Ali', '8145220128', 'technicalakramul7@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(2, 'Sk Akramul Ali', '7045053487', 'akramulali8067@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(3, 'Sk Akramul Ali', '8145220128', 'akramulali8@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(4, 'Akram', '8145220128', 'akramulali972348@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `quickcontact`
--

CREATE TABLE `quickcontact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `textarea` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quickcontact`
--

INSERT INTO `quickcontact` (`name`, `email`, `textarea`) VALUES
('akramul', 'technicalakramul7@gmail.com', 'hiii'),
('akramul', 'technicalakramul7@gmail.com', 'hiii'),
('akramul', 'akramulali8@gmail.com', 'hiii'),
('Sk  Akramul Ali', 'akramulali8067@gmail.com', 'hi'),
('Sk  Akramul Ali', 'akramulali8067@gmail.com', 'hii'),
('Sk  Akramul Ali', 'technicalakramul7@gmail.com', 'hhi'),
('Sk  Akramul Ali', 'technicalakramul7@gmail.com', 'hhi'),
('akram', 'akramulali8067@gmail.com', 'gg'),
('Sk  Akramul Ali', 'akramulali8067@gmail.com', 'hiiii'),
('Sk  Akramul Ali', 'technicalakramul7@gmail.com', 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `ID` int(10) NOT NULL,
  `Docid` int(10) DEFAULT NULL,
  `PatientName` varchar(20) DEFAULT NULL,
  `PatientContno` bigint(10) DEFAULT NULL,
  `PatientEmail` varchar(30) DEFAULT NULL,
  `PatientGender` varchar(10) DEFAULT NULL,
  `PatientAdd` mediumtext DEFAULT NULL,
  `PatientAge` int(10) DEFAULT NULL,
  `PatientMedhis` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`ID`, `Docid`, `PatientName`, `PatientContno`, `PatientEmail`, `PatientGender`, `PatientAdd`, `PatientAge`, `PatientMedhis`, `CreationDate`) VALUES
(19, 1, 'Sk Akramul Ali', 8145220128, 'akramulali888@gmail.com', 'male', 'mumbai', 21, 'nothing', '2020-08-07 03:34:33'),
(20, 1, 'Akramul', 7045053487, 'akramulali8067@gmail.com', 'male', 'mumbai', 21, 'nothing', '2020-08-07 03:35:07'),
(21, 1, 'Akramul Ali', 8145220129, 'akramulali19@gmail.com', 'male', 'mumbai', 21, 'nothing', '2020-08-07 03:35:46'),
(22, 1, 'Akramul Ali', 8145220129, 'akramulali19@gmail.com', 'male', 'mumbai', 21, 'nothing', '2020-08-07 03:35:46'),
(23, 1, 'Akramul Ali', 8145220125, 'akramulali888@gmail.com', 'male', 'mumbai', 21, 'nothing', '2020-08-08 13:39:39');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `doctorsignup`
--
ALTER TABLE `doctorsignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `patientsignup`
--
ALTER TABLE `patientsignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
