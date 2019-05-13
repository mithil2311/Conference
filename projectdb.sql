-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 07:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mentor_tb`
--

CREATE TABLE `mentor_tb` (
  `mid` int(11) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `mno` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor_tb`
--

INSERT INTO `mentor_tb` (`mid`, `mname`, `email`, `phno`, `mno`, `password`) VALUES
(1, 'test1', 'test1@gmail.com', '956894563221', '98979794313', 'abc213');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentor_tb`
--
ALTER TABLE `mentor_tb`
  ADD PRIMARY KEY (`mid`) KEY_BLOCK_SIZE=5 USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mentor_tb`
--
ALTER TABLE `mentor_tb`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
