-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 05:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coaching`
--

-- --------------------------------------------------------

--
-- Table structure for table `coaches`
--

CREATE TABLE `coaches` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `mobilenumber` int(14) DEFAULT NULL,
  `primaryrole` varchar(12) NOT NULL,
  `mmr` int(5) NOT NULL,
  `steamlink` varchar(255) NOT NULL,
  `dotabufflink` varchar(255) NOT NULL,
  `achievements` varchar(255) DEFAULT NULL,
  `fees` int(5) NOT NULL,
  `schedule` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coaches`
--

INSERT INTO `coaches` (`id`, `name`, `password`, `email`, `gender`, `mobilenumber`, `primaryrole`, `mmr`, `steamlink`, `dotabufflink`, `achievements`, `fees`, `schedule`) VALUES
(1, 'Asef', '123', 'asefhossain123@gmail.com', 'Other', 1878120028, 'Pos1', 123, '123', '123', '123', 123, '123'),
(2, 'Hello', '1231', 'lala@yahoo.com', 'Female', 123, 'Pos2', 123, '123', '123', '123', 123, '123'),
(3, 'Asef Khan', '123', 'asefhossain1@gmail.com', 'Male', 1878120028, 'Pos1', 123, '123', '123', '123', 123, '123'),
(4, 'Asef Khan', '123', 'asefhos23@gmail.com', 'Male', 1878120028, 'Pos1', 123, '123', '123', '123', 123, '123'),
(5, 'Hello', '123', 'hello@gmail.com', 'Other', 454646, 'Pos1', 4001, 'steam/asef', 'dotabuff/asef', 'Nothing', 400, 'Anytime'),
(6, 'Shirsho', '123', 'shirsho@gmail.com', 'Other', 7, 'Pos1', 5000, 'steam/shirsho', 'dotabuff/shirsho', 'Winner Winner!', 1000, 'Anytime'),
(7, 'Wadi', '123', 'wadi@yahoo.com', 'Female', 0, 'Pos4', 6000, 'wadi', 'wadi', 'Wadi', 800, 'wadi'),
(8, 'Asif', '123', 'asif@gmail.com', 'Male', 12345678, 'Pos5', 10000, 'asif', 'asif', 'asif vaia', 1000, 'asif vaia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailUnique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
