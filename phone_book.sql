-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 01:45 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_app`
--

CREATE TABLE `admin_app` (
  `admin_id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `admin_app`
--

INSERT INTO `admin_app` (`admin_id`, `fullname`, `email`, `username`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Mojdeh Bahadorpour', 'm.bahadorpour@gmail.com', 'bahadorpour', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Johne Doe', 'doe@gmail.com', 'doe', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `department_group`
--

CREATE TABLE `department_group` (
  `dep_ID` int(50) NOT NULL,
  `dep_name` varchar(250) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `department_group`
--

INSERT INTO `department_group` (`dep_ID`, `dep_name`) VALUES
(1, 'Network'),
(2, 'Network Programming'),
(3, 'Web Programming'),
(4, 'Quality Assurance (QA)'),
(5, 'Support and Maintenance'),
(6, 'Management');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `dep_id_fk` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `last_name` varchar(1150) COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_persian_ci DEFAULT NULL,
  `local_phone` varchar(10) COLLATE utf8_persian_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_persian_ci DEFAULT NULL,
  `address` varchar(150) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `dep_id_fk`, `first_name`, `last_name`, `phone`, `local_phone`, `email`, `address`) VALUES
(1, 4, 'Alex', 'Johne', '03312344566', '111', 'Alex@gmail.com', 'Kardan Street 12'),
(3, 3, 'Jane', 'Kempen', '0556612346', '555', 'Jane@gmail.com', 'Robert street 11'),
(4, 3, 'Mojdeh', 'Bahadorpour', '07788345345', '777', 'm.bahadorpour@gmail.com', 'Monday street 41'),
(5, 1, 'Rosa', 'Mueller', '0099786787', '123', 'Rosa@gmail.com', 'Berlin street 65'),
(6, 2, 'Sabine', 'Bos', '04564567755', '777', 'bos@gmail.com', 'Bismark street 34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_app`
--
ALTER TABLE `admin_app`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `department_group`
--
ALTER TABLE `department_group`
  ADD PRIMARY KEY (`dep_ID`) USING BTREE;

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`) USING BTREE,
  ADD KEY `dep_id_fk` (`dep_id_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_app`
--
ALTER TABLE `admin_app`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department_group`
--
ALTER TABLE `department_group`
  MODIFY `dep_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`dep_id_fk`) REFERENCES `department_group` (`dep_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
