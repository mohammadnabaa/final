-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 07:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydbproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `ask_for_blood`
--

CREATE TABLE `ask_for_blood` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bloodgroup` enum('A+','A-','B+','B-','AB+','AB-','O+','O+') NOT NULL,
  `requiredquantity` varchar(30) NOT NULL,
  `blooddate` varchar(30) NOT NULL,
  `hospitalname` varchar(30) NOT NULL,
  `hospitaladress` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ask_for_blood`
--

INSERT INTO `ask_for_blood` (`id`, `name`, `address`, `phone`, `email`, `bloodgroup`, `requiredquantity`, `blooddate`, `hospitalname`, `hospitaladress`) VALUES
(1, 'Ahmad Ali', 'nabteyeh', '+4476127981', 'ahmad@gmail.com', 'O+', '2', '2022-05-24', 'aubmc', 'beirut'),
(2, 'Ahmad Ali', 'nabteyeh', '+4476127981', 'ahmad@gmail.com', 'A+', '1', '', 'aubmc', 'beirut'),
(3, 'Ahmad Aliali', 'nabteyeh', '+4476127981', 'ahmad@gmail.com', 'A+', '1', '', 'aubmc', 'beirut');

-- --------------------------------------------------------

--
-- Table structure for table `association_donation`
--

CREATE TABLE `association_donation` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `license` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `association_donation`
--

INSERT INTO `association_donation` (`id`, `name`, `phone`, `email`, `license`) VALUES
(1, 'the association name', '01/777 605', 'any@gmail.com', '123.765.888.21');

-- --------------------------------------------------------

--
-- Table structure for table `donate_blood`
--

CREATE TABLE `donate_blood` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bloodgroup` enum('A+','A-','B+','B-','AB+','AB-','O+','O-') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate_blood`
--

INSERT INTO `donate_blood` (`id`, `name`, `address`, `phone`, `email`, `bloodgroup`) VALUES
(1, 'hasan nemir alaina', 'beirut bear hasan', '01/413 541', 'hasan@gmail.com', 'B+'),
(2, 'Ahmad Ali', 'nabteyeh', '+4476127981', 'ahmad@gmail.com', 'A+'),
(3, 'Ahmad Ali', 'nabteyeh', '+4476127981', 'ahmad@gmail.com', 'A+'),
(4, 'Hasan Nemir Alainaaaa', '', '76213541', 'hasan@gmail.com', 'A+'),
(5, 'Ahmad Alialiaaaaaa', 'nabteyeh', '+4476127981', 'ahmad@gmail.com', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `general_donation`
--

CREATE TABLE `general_donation` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `donation_type` varchar(25) NOT NULL,
  `idea` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_donation`
--

INSERT INTO `general_donation` (`id`, `name`, `phone`, `email`, `address`, `donation_type`, `idea`) VALUES
(1, 'Ahmad Ali', '+4476127981', 'ahmad@gmail.com', 'nabteyeh', 'Food', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `phone`) VALUES
(1, 'hasan alaina', 'hasan222', 'hasan222', 'hasan@hotmail.com', '71223442'),
(2, 'Hasan Nemir Alaina', 'Hasanweb246', '123456789', 'hasan@gmail.com', '76/213 541'),
(3, 'Ahmad Ali', 'ahmadali2305', '123456', 'ahmad@gmail.com', '76/127 981');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `previous` varchar(5) NOT NULL,
  `age` int(26) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `phone`, `email`, `gender`, `previous`, `age`, `nationality`, `address`) VALUES
(1, 'Ahmad Ali', '+4476127981', 'ahmad@gmail.com', 'm', 'previ', 20, 'Lebanese', 'nabteyeh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ask_for_blood`
--
ALTER TABLE `ask_for_blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `association_donation`
--
ALTER TABLE `association_donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate_blood`
--
ALTER TABLE `donate_blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_donation`
--
ALTER TABLE `general_donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ask_for_blood`
--
ALTER TABLE `ask_for_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `association_donation`
--
ALTER TABLE `association_donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donate_blood`
--
ALTER TABLE `donate_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `general_donation`
--
ALTER TABLE `general_donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
