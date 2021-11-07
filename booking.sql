-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 01:56 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_setup`
--

CREATE TABLE `appointment_setup` (
  `appointment_id` int(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `file_url` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `message` varchar(250) NOT NULL,
  `date` varchar(150) NOT NULL,
  `time_slots` varchar(150) NOT NULL,
  `branch` varchar(150) NOT NULL,
  `terms_agreed` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_setup`
--

INSERT INTO `appointment_setup` (`appointment_id`, `name`, `file_url`, `gender`, `email`, `phone`, `address`, `message`, `date`, `time_slots`, `branch`, `terms_agreed`) VALUES
(21, 'Sumit Maharjan', '', 'male', 'factsduniyaonline@gmail.com', 2147483647, 'Kathmandu', 'fghghgfh', '2021-11-20', '10:00AM-10:30AM', 'PKR', ''),
(23, 'Sumit Maharjan', './assets/frontend/images/', 'other', 'factsduniyaonline@gmail.com', 2147483647, 'Kathmandu', 'sadfasdfdsf', '2021-11-01', '01:00AM-01:30AM', 'KTM', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `package_setup`
--

CREATE TABLE `package_setup` (
  `package_id` int(50) NOT NULL,
  `package_name` varchar(250) NOT NULL,
  `package_features` varchar(200) NOT NULL,
  `package_price` varchar(200) NOT NULL,
  `package_offer_price` varchar(200) NOT NULL,
  `best_for` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_setup`
--

INSERT INTO `package_setup` (`package_id`, `package_name`, `package_features`, `package_price`, `package_offer_price`, `best_for`) VALUES
(1, 'Basic Starter Package', '', '100000', '10000', 'Advance E-commerce, News Portal like Onlinekhabar,Setopati etc');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(150) NOT NULL,
  `updated_at` varchar(150) NOT NULL,
  `is_logged_in` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `email`, `password`, `updated_at`, `is_logged_in`) VALUES
(1, 'sumit', 'timusumit@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-11-02 15:21:10', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_setup`
--
ALTER TABLE `appointment_setup`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `package_setup`
--
ALTER TABLE `package_setup`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_setup`
--
ALTER TABLE `appointment_setup`
  MODIFY `appointment_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `package_setup`
--
ALTER TABLE `package_setup`
  MODIFY `package_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
