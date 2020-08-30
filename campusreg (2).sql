-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2020 at 11:53 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campusreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'Jeet', 'Patel', 'jkp2072@gmail.com', 'harvey', 'jeet123'),
(2, 'Jeet', 'Patel', 'jkp2072@gmail.com', 'jkp', '123'),
(3, 'ramesh', 'chaiwala', 'rc@gmail.com', 'rameshchai', '123'),
(4, 'harvey', 'specter', 'harveyspecter@gmail.com', 'hrvy', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `college` varchar(55) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(55) NOT NULL,
  `mob` bigint(100) NOT NULL,
  `graduatedate` date NOT NULL,
  `ques` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `firstname`, `lastname`, `college`, `address`, `email`, `mob`, `graduatedate`, `ques`) VALUES
(1, 'Jeet', 'Patel', 'IIIT-SURAT', 'B-2072,haep township,kribhco Nagar,Hazira road,surat,gujarat', 'jkp2072@gmail.com', 9999999999, '2020-08-14', 'fxxfbxfbxcb'),
(2, 'Jeet', 'Patel', 'IIIT-SURAT', 'dfgdfgsdfgdfgdf', 'jkp2072@gmail.com', 54645645654654, '2020-08-13', 'zdfbzdfbzfbf'),
(3, 'suraj', 'singh', 'dfgdfgdfg', 'dfgdfgdfgd', 'dfgsdfsdfsdfsdfsdf', 565565666, '2020-08-13', 'truftucfufc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;