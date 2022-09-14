-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2022 at 03:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Guests`
--

CREATE TABLE `Guests` (
  `id` int(100) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `rooms` varchar(20) NOT NULL,
  `person` varchar(20) NOT NULL,
  `mobilenumber` varchar(30) NOT NULL,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Guests`
--

INSERT INTO `Guests` (`id`, `firstname`, `lastname`, `email`, `rooms`, `person`, `mobilenumber`, `checkindate`, `checkoutdate`) VALUES
(1, 'Kiran', 'Makwana', 'makwana1545@gmail.com', '1', '2', '8725489654', '2022-09-14', '2022-09-16'),
(2, 'vaibhav', 'vasoya', 'vaibhav25@gmail.com', '2', '4', '9327921154', '2022-09-15', '2022-09-20'),
(3, 'hemin', 'dhameliya', 'hemindhameliya@gmail.com', '1', '3', '8488958802', '2022-09-20', '2022-09-22'),
(4, 'Mehul', 'Chotala', 'mehul1254@gmail.com', '1', '4', '8545632548', '2022-09-15', '2022-09-17'),
(5, 'Gopal', 'Ganjo', 'gopsganjaa@gmail.com', '2', '5', '9845658721', '2022-09-16', '2022-09-18'),
(6, 'Nikhil', 'Lakhani', 'nikhil@gmail.com', '1', '1', '9565240145', '2022-09-14', '2022-09-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Guests`
--
ALTER TABLE `Guests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Guests`
--
ALTER TABLE `Guests`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
