-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 09:23 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_taka`
--

-- --------------------------------------------------------

--
-- Table structure for table `loanzone`
--

CREATE TABLE `loanzone` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `card number` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sb_userlist`
--

CREATE TABLE `sb_userlist` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `dp` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sb_userlist`
--

INSERT INTO `sb_userlist` (`id`, `fullname`, `username`, `password`, `email`, `usertype`, `gender`, `education`, `nationality`, `dp`) VALUES
(1, 'omar faruk', 'omar', 'omar123', 'mdomar0101@gmail.com', 'Aadmin', 'male', 'BSC', 'bd', 'mask_1.jpg'),
(4, 'omar faruk ', 'omarr', 'omar123', 'mdomar0101@gmail.com', 'banker', 'male', 'BSC', 'canada', '../model/uploads/pexels-tetyana-kovyrina-937980.jpg'),


-- --------------------------------------------------------

--
-- Table structure for table `statements`
--

CREATE TABLE `statements` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `withdraw` int(11) NOT NULL,
  `deposit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loanzone`
--
ALTER TABLE `loanzone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sb_userlist`
--
ALTER TABLE `sb_userlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loanzone`
--
ALTER TABLE `loanzone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sb_userlist`
--
ALTER TABLE `sb_userlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
