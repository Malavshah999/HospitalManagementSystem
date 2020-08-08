-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 11:26 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
