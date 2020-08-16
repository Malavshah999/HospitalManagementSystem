-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 06:26 PM
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
(1, 'Dr. Monaksh Shah', '7045053588', 'dr.monaksh@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(2, 'Dr. Anjila Aneja', '8145220120', 'dr.anjila8067@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(3, 'Mr. Swaroop Gopal', '8145220345', 'swaroop.gopal6@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(4, 'Mrs. Nina Patel', '7045053666', 'nina.patel97234@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(5, 'Dr. Amit Shrivastava', '8155520120', 'amit.shrivastava@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(6, 'Mrs. Nareshi Trehan', '8455797568', 'nareshi.trehan5667@gmail.com', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorsignup`
--
ALTER TABLE `doctorsignup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctorsignup`
--
ALTER TABLE `doctorsignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
