-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 02:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traning`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `id` int(20) NOT NULL,
  `fnm` varchar(30) NOT NULL,
  `lnm` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `hobby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`id`, `fnm`, `lnm`, `gender`, `address`, `hobby`) VALUES
(1, 'Rinkal', 'Gadhiya', 'female', 'Rajkot', 'swimming,dancing'),
(2, 'parv', 'Gadhiya', 'male', 'zanzarda road ,Junagadh', 'reading,swimming'),
(5, 'abhay', 'Fataniya', 'male', 'Ahmdabad', 'swimming,dancing'),
(6, 'neha', 'Fataniya', 'female', 'Jamnagar', 'swimming,dancing'),
(7, 'hardeep', 'chavda', 'male', 'Junagadh', 'reading'),
(18, 'Dikshit', 'Solanki', 'male', 'khalipur road,Junagadh', 'reading,swimming'),
(20, 'vyoma', 'Thakar', 'female', 'zanzarda road', 'reading'),
(21, 'mahadev', 'mahadev', 'male', 'kedarnath', 'reading'),
(25, 'bhavyta', 'solanki', 'female', 'zanzarda road', 'reading,dancing'),
(26, 'bhavyta', 'solanki', 'female', 'zanzarda road', 'swimming,dancing'),
(27, 'bhavyta', 'solanki', 'female', 'junagadh', 'dancing'),
(28, 'pravia', 'Gadhiya', 'female', 'zanzarda road', 'reading'),
(42, 'Aayushi ', 'Mirani', 'female', 'Gujarat', 'reading,swimming');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud`
--
ALTER TABLE `stud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud`
--
ALTER TABLE `stud`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
