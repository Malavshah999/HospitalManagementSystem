-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 02:32 AM
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
  `patient` varchar(25) NOT NULL,
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
(15, 'akramulali80679@gmail.com', 'Dr. Monaksh Shah', '2020-08-13', '9:00-10:00 a.m.', 1000, '8145220128', 'mumbai', 'no'),
(16, 'akramulali80679@gmail.com', 'akram', '2020-08-13', '9:00-10:00 a.m.', 100, '8145220128', 'mumbai', 'no'),
(17, 'akramulali80679@gmail.com', 'akram', '2020-08-04', '10:00-11:00 a.m.', 100, '8145220128', 'mumbai', 'no'),
(18, 'akramulali80679@gmail.com', 'Swaroop Gopal', '2020-08-04', '10:00-11:00 a.m.', 100, '8145220128', 'mumbai', 'no'),
(19, 'akramulali80679@gmail.com', 'Swaroop Gopal', '2020-08-11', '10:00-11:00 a.m.', 100, '8145220128', 'mumbai', 'no'),
(20, 'akramulali80679@gmail.com', 'Dr. Monaksh Shah', '2020-08-19', '9:00-10:00 a.m.', 100, '8145220128', 'mumbai', 'no'),
(21, 'akramulali80679@gmail.com', 'Dr. Monaksh Shah', '2020-07-30', '11:00-12:00 a.m.', 100, '8145220128', 'mumbai', 'no');

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
('Sk  Akramul Ali', 'technicalakramul7@gmail.com', '8145220128', 'hi');

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
(24, 'Gastroenterology', 'Swaroop Gopal', 'mumbai', '3000', 8145220129, 'akramul68@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2020-08-07 04:16:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctorsignup`
--

CREATE TABLE `doctorsignup` (
  `fullname` varchar(30) NOT NULL,
  `phonenumber` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorsignup`
--

INSERT INTO `doctorsignup` (`fullname`, `phonenumber`, `email`, `password`) VALUES
('Sk Akramul', '7045053487', 'akramulali8@gmail.com', '25d55ad283aa400af464c76d7'),
('Sk Akramul Ali', '8145220128', 'akramulali97234@gmail.com', '25d55ad283aa400af464c76d7'),
('Sk Akramul Ali', '8145220128', 'technicalakramul7@gmail.com', '25d55ad283aa400af464c76d7'),
('Sk Akramul Ali', '8145220128', 'technicalakramul70@gmail.com', '42b02d1377ca4ffced107a584'),
('Akram', '8145220129', 'technicalakramul7777@gmail.com', '25d55ad283aa400af464c76d7'),
('Sk Akramul Ali', '8145220128', 'technicalakramul997@gmail.com', '42b02d1377ca4ffced107a584'),
('Sk Akramul', '7045053487', 'technicalakramul790@gmail.com', '25d55ad283aa400af464c76d7'),
('Sk Akramul Ali', '7045053487', 'technicalakramul789@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
('Sk Akramul Ali', '8452255622', 'technicalakramul786@gmail.com', '25d55ad283aa400af464c76d713c07ad');

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
(7, 'Neurology', '2020-08-07 03:30:14', '2020-08-07 03:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` enum('male','female','others','') NOT NULL,
  `birthday` date NOT NULL,
  `Contact` int(11) NOT NULL,
  `Postal` int(11) NOT NULL,
  `textarea` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`id`, `name`, `gender`, `birthday`, `Contact`, `Postal`, `textarea`) VALUES
(2, 'Malav Shah', 'male', '2016-01-01', 222, 11, 11),
(3, 'Sk  Akramul Ali', 'male', '2020-08-05', 2147483647, 400011, 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` enum('male','female','others') NOT NULL,
  `birthday` date NOT NULL,
  `Height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Marital` enum('Single','married','Divorced','Legally Separated','Widowed') NOT NULL,
  `textarea` varchar(50) NOT NULL,
  `f2name` varchar(20) NOT NULL,
  `Relationship` varchar(15) NOT NULL,
  `Contact2` varchar(15) NOT NULL,
  `Postal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`name`, `email`, `gender`, `birthday`, `Height`, `weight`, `Contact`, `Marital`, `textarea`, `f2name`, `Relationship`, `Contact2`, `Postal`) VALUES
('akram', 'technicalakramul7@gmail.com', 'male', '2020-05-06', '15', '15', '8145220128', 'Single', 'knkjbb', 'Sk akram', 'friend', '4542 555555', '400011'),
('Sk  Akramul Ali', 'akramulali8067@gmail.com', 'male', '2020-05-12', '15', '50', '8145220128', 'Single', 'mumbai 400011', 'SK Akramul ALi', 'fr', '', ''),
('Sk  Akramul Ali', 'akramulali8067@gmail.com', 'male', '2020-05-12', '15', '50', '8145220128', 'Single', 'mumbai 400011', 'SK Akramul ALi', 'friend', '7045053487', '400011'),
('Sk  Akramul Ali', 'akramulali8067@gmail.com', 'male', '2020-05-12', '15', '50', '8145220128', 'Single', 'mumbai 400011', 'SK Akramul ALi', 'friend', '7045053487', '400011'),
('akram', 'technicalakramul7@gmail.com', 'male', '2020-05-05', '15', '15', '8', 'Single', 'ss', 'kkl', 'inkk', 'knl', 'kml'),
('', '', 'male', '0000-00-00', '', '', '', '', '', '', '', '', ''),
('', '', 'male', '0000-00-00', '', '', '', '', '', '', '', '', ''),
('', '', 'male', '0000-00-00', '', '', '', '', '', '', '', '', ''),
('akram', 'akramulali8067@gmail.com', 'male', '2020-06-02', '15', '15', '55555556652', 'Single', 'hii', '4', 'fr', '4542 555555', '400011'),
('Sk  Akramul Ali', 'akramulali8067@gmail.com', 'male', '2020-06-29', '7', '60', '8145220128', 'Single', 'mumbai', 'SK Akramul ALi', 'friend', '7045053487', '400011');

-- --------------------------------------------------------

--
-- Table structure for table `patientsignup`
--

CREATE TABLE `patientsignup` (
  `fullname` varchar(25) NOT NULL,
  `phonenumber` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientsignup`
--

INSERT INTO `patientsignup` (`fullname`, `phonenumber`, `email`, `password`) VALUES
('Sk Akramul Ali', '7045053487', 'akramulali8@gmail.com', '25d55ad283aa400af464c76d713c07'),
('Sk Akramul', '8145220128', 'akramulali8067@gmail.com', '25d55ad283aa400af464c76d713c07'),
(' Akramul ali', '4562555582', 'akramulali97234@gmail.com', '25d55ad283aa400af464c76d713c07'),
('akrama ali', '8452255622', 'akramulali9723@gmail.com', '25d55ad283aa400af464c76d713c07'),
('Sk Akramul Ali', '8145220128', 'technicalakramul7@gmail.com', '42b02d1377ca4ffced107a584ee06a'),
('Sk Akramul Ali', '8452255622', 'akramul@gmail.com', '42b02d1377ca4ffced107a584ee06a'),
('Sk Akramul', '8452255622', 'akramul9999@gmail.com', '42b02d1377ca4ffced107a584ee06a'),
('akram', '8452255622', 'akramulqqq1@gmail.com', '42b02d1377ca4ffced107a584ee06a'),
('akram', '5425265254', 'akakramul@gmail.com', '42b02d1377ca4ffced107a584ee06a'),
('babu', '8145220128', 'akramul9@gmail.com', '42b02d1377ca4ffced107a584ee06a'),
('Akram ali sk babu', '8145220128', 'technicalakramul79@gmail.com', '25d55ad283aa400af464c76d713c07'),
('akrama ali sk', '8145220120', 'technicalakramul7986@gmail.com', '25d55ad283aa400af464c76d713c07'),
('Sk Akramul Ali', '8145220128', 'technicalakramul007@gmail.com', '25d55ad283aa400af464c76d713c07'),
('Sk Akramul Ali', '8145220120', 'akramulali89@gmail.com', '25d55ad283aa400af464c76d713c07'),
('Sk Akramul Ali', '7045053487', 'akramulali80679@gmail.com', '25d55ad283aa400af464c76d713c07ad');

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
('Sk  Akramul Ali', 'akramulali8067@gmail.com', 'hiiii');

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
(22, 1, 'Akramul Ali', 8145220129, 'akramulali19@gmail.com', 'male', 'mumbai', 21, 'nothing', '2020-08-07 03:35:46');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `emergency`
--
ALTER TABLE `emergency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
