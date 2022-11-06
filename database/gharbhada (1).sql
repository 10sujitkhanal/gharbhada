-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 06, 2022 at 02:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gharbhada`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_property`
--

CREATE TABLE `add_property` (
  `property_id` int(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `vdc_municipality` varchar(50) NOT NULL,
  `ward_no` int(10) NOT NULL,
  `tole` varchar(100) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `estimated_price` bigint(10) NOT NULL,
  `total_rooms` int(10) NOT NULL,
  `bedroom` int(10) NOT NULL,
  `living_room` int(10) NOT NULL,
  `kitchen` int(10) NOT NULL,
  `bathroom` int(10) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `booked` varchar(5) NOT NULL DEFAULT 'No',
  `owner_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_property`
--

INSERT INTO `add_property` (`property_id`, `country`, `province`, `zone`, `district`, `city`, `vdc_municipality`, `ward_no`, `tole`, `contact_no`, `property_type`, `estimated_price`, `total_rooms`, `bedroom`, `living_room`, `kitchen`, `bathroom`, `description`, `booked`, `owner_id`) VALUES
(127, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Pokhara', 'Municipality', 32, '23', 9842765535, 'Room Rent', 12345, 1, 1, 1, 1, 1, 'Detail', 'Yes', 1),
(128, 'Nepal', 'Province No. 2', 'Sagarmatha', 'Mahottari', 'Pokhara', 'Municipality', 32, '23', 9842765535, 'Full House Rent', 12345, 1234, 123, 1, 1, 1, 'dnjvdv nd vd vd v dv dj v', 'Yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'sujit@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `tenant_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `property_id`, `tenant_id`, `is_active`) VALUES
(4, 128, 18, 1),
(5, 127, 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `owner_id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `id_photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`owner_id`, `full_name`, `email`, `password`, `phone_no`, `address`, `id_photo`) VALUES
(1, 'sujit khanal', 'sujit@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 987654321, 'Pokhara-3', 'never.jpg'),
(2, 'Sujit Khanal', '10sujitkhanal@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 9779842765535, 'Pokhara-32, yuio', 'owner-photo/png-transparent-computer-icons-macos-xampp-bartender-icon-love-text-heart-thumbnail.png');

-- --------------------------------------------------------

--
-- Table structure for table `property_photo`
--

CREATE TABLE `property_photo` (
  `property_photo_id` int(12) NOT NULL,
  `p_photo` varchar(500) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_photo`
--

INSERT INTO `property_photo` (`property_photo_id`, `p_photo`, `property_id`) VALUES
(201, 'product-photo/WallpaperDog-20518349.jpg', 127),
(202, 'product-photo/1_fVBL9mtLJmHIH6YpU7WvHQ.png', 127),
(203, 'product-photo/png-transparent-computer-icons-macos-xampp-bartender-icon-love-text-heart-thumbnail.png', 127),
(204, 'product-photo/1_fVBL9mtLJmHIH6YpU7WvHQ.png', 128);

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `tenant_id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `id_photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`tenant_id`, `full_name`, `email`, `password`, `phone_no`, `address`, `id_photo`) VALUES
(18, 'Sujit Khanal', 'sujit@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 9779842765535, 'Pokhara-32, yuio', 'tenant-photo/1_fVBL9mtLJmHIH6YpU7WvHQ.png'),
(19, 'Sujit Khanal', 'sujit1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 9779842765535, 'Pokhara-32', 'tenant-photo/1_fVBL9mtLJmHIH6YpU7WvHQ.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_property`
--
ALTER TABLE `add_property`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `property_photo`
--
ALTER TABLE `property_photo`
  ADD PRIMARY KEY (`property_photo_id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`tenant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_property`
--
ALTER TABLE `add_property`
  MODIFY `property_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `owner_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property_photo`
--
ALTER TABLE `property_photo`
  MODIFY `property_photo_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `tenant_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_property`
--
ALTER TABLE `add_property`
  ADD CONSTRAINT `add_property_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner` (`owner_id`);

--
-- Constraints for table `property_photo`
--
ALTER TABLE `property_photo`
  ADD CONSTRAINT `property_photo_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `add_property` (`property_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
