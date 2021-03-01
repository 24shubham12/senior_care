-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 03:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senior_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorlogin`
--

CREATE TABLE `doctorlogin` (
  `id` int(11) NOT NULL,
  `dremail` varchar(50) NOT NULL,
  `drpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorlogin`
--

INSERT INTO `doctorlogin` (`id`, `dremail`, `drpass`) VALUES
(1, 'doctor1@gmail.com', 'doctor12345');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(50) NOT NULL,
  `med1` varchar(100) NOT NULL,
  `med2` varchar(100) NOT NULL,
  `med3` varchar(100) NOT NULL,
  `med4` varchar(100) NOT NULL,
  `med5` varchar(100) NOT NULL,
  `med6` varchar(100) NOT NULL,
  `medusage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `med1`, `med2`, `med3`, `med4`, `med5`, `med6`, `medusage`) VALUES
(1, 'sdfsd', 'sdfsdf', 'fdsf', 'fsdf', 'sfdsdf', 'sdfsdf', 'sdfsdfdsfsdf'),
(2, 'crocin', 'vicks', 'anacene', 'penicilene', 'folic acid', 'revital', 'take this medicines daily for 1 week ..');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(255) NOT NULL,
  `register_datetime` datetime NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `apndate` date NOT NULL,
  `dob` date NOT NULL,
  `age` int(250) NOT NULL,
  `height` int(100) NOT NULL,
  `weight` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `medcondition` varchar(255) NOT NULL,
  `reportfile_one` varchar(500) NOT NULL,
  `reportfile_two` varchar(500) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `register_datetime`, `firstname`, `lastname`, `contact`, `apndate`, `dob`, `age`, `height`, `weight`, `email`, `password`, `medcondition`, `reportfile_one`, `reportfile_two`, `status`) VALUES
(1, '2021-02-25 16:14:36', 'shuham', 'Mishra', '8806063937', '2021-02-27', '1945-12-20', 76, 165, 80, '24shubham@gmail.com', '12345', 'feeling ill and fever...', 'shuham_20210225161436.jpg', 'shuham_20210225161436.zip', 1),
(2, '2021-02-25 16:22:22', 'shivam', 'Khandwe', '8806063937', '2021-02-27', '1945-12-30', 76, 165, 80, '24shubham12@gmail.com', '6755555557', 'sir, Im suffering from fever since yexsterday..please prescrie some medicines to me.', 'shivam_20210225162222.pdf', 'shivam_20210225162222.jpg', 1),
(3, '2021-02-26 07:19:03', 'jatin', 'Mishra', '9897987979', '2021-02-28', '1928-11-16', 93, 160, 80, 'vinod@gmail.com', '123457', 'raeFSZGDxndfgsafgszfhdxgjxghfsgn', 'jatin_20210226071903.jpg', 'jatin_20210226071903.pdf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorlogin`
--
ALTER TABLE `doctorlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctorlogin`
--
ALTER TABLE `doctorlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
