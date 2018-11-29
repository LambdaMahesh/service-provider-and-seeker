-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 03:38 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service_seek_prov`
--

-- --------------------------------------------------------

--
-- Table structure for table `cusomer`
--

CREATE TABLE `cusomer` (
  `cost_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `city` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `order_no` int(11) NOT NULL,
  `ord_date` varchar(100) NOT NULL,
  `ord_time` varchar(100) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `worker_basic`
--

CREATE TABLE `worker_basic` (
  `basic_id` int(11) NOT NULL,
  `govt_id_type` varchar(25) NOT NULL,
  `govt_id_no` varchar(20) NOT NULL,
  `govt_id_path` varchar(100) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `worker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `worker_location`
--

CREATE TABLE `worker_location` (
  `worker_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `worker_reg`
--

CREATE TABLE `worker_reg` (
  `worker_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(25) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `worker_skill`
--

CREATE TABLE `worker_skill` (
  `worker_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `cost_per_hr` int(11) NOT NULL,
  `work_from` varchar(100) NOT NULL,
  `work_to` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `skills_or_pro` varchar(500) NOT NULL,
  `type_or_expirience` varchar(50) NOT NULL,
  `institution_worked` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `DLno` varchar(30) NOT NULL,
  `award_pic` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cusomer`
--
ALTER TABLE `cusomer`
  ADD PRIMARY KEY (`cost_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `worker_basic`
--
ALTER TABLE `worker_basic`
  ADD PRIMARY KEY (`basic_id`);

--
-- Indexes for table `worker_location`
--
ALTER TABLE `worker_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `worker_reg`
--
ALTER TABLE `worker_reg`
  ADD PRIMARY KEY (`worker_id`);

--
-- Indexes for table `worker_skill`
--
ALTER TABLE `worker_skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cusomer`
--
ALTER TABLE `cusomer`
  MODIFY `cost_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `worker_basic`
--
ALTER TABLE `worker_basic`
  MODIFY `basic_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `worker_location`
--
ALTER TABLE `worker_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `worker_reg`
--
ALTER TABLE `worker_reg`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `worker_skill`
--
ALTER TABLE `worker_skill`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
