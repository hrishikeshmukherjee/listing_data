-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 05:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_course_20220118`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `sl` int(11) NOT NULL,
  `category_sl` int(11) NOT NULL,
  `sub_category_sl` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`sl`, `category_sl`, `sub_category_sl`, `product_name`) VALUES
(1, 1, 1, 'Pour-Over Coffee Maker'),
(2, 1, 1, 'Single-Serve Capsule Coffee Maker'),
(3, 1, 1, 'French Press Coffee Maker'),
(4, 1, 1, 'AeroPress Coffee Maker'),
(5, 1, 3, 'Preethi MG 218 Zodiac 750W Juicer Mixer Grinder'),
(6, 1, 3, 'Prestige Iris 750W Mixer Grinder');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `sl` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`sl`, `category_name`) VALUES
(1, 'Appliances'),
(2, 'Apps & Games'),
(3, 'Arts, Crafts, & Sewing'),
(4, 'Automotive Parts & Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_category`
--

CREATE TABLE `product_sub_category` (
  `sl` int(11) NOT NULL,
  `category_sl` int(11) NOT NULL,
  `sub_category_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_sub_category`
--

INSERT INTO `product_sub_category` (`sl`, `category_sl`, `sub_category_name`) VALUES
(1, 1, 'Coffee maker'),
(2, 1, 'Blender'),
(3, 1, 'Mixer'),
(4, 1, 'Toaster'),
(5, 1, 'Microwave'),
(6, 1, 'Crock pot'),
(7, 2, 'Halfbrick Studios games'),
(8, 2, 'Monument Valley 1 and 2'),
(9, 2, 'Nintendo games'),
(10, 2, 'Noodlecake Studios games'),
(11, 2, 'Pokemon Go'),
(12, 2, 'Rayark rhythm games'),
(13, 3, 'Ceramics and glass crafts'),
(14, 3, 'Fiber and textile crafts');

-- --------------------------------------------------------

--
-- Table structure for table `test_data`
--

CREATE TABLE `test_data` (
  `sl` int(11) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  `multiple_file_path` varchar(20) DEFAULT NULL,
  `date_time` varchar(25) DEFAULT NULL,
  `a` int(11) NOT NULL,
  `b` int(11) NOT NULL,
  `c` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  `e` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_data`
--

INSERT INTO `test_data` (`sl`, `full_name`, `mobile_no`, `email`, `file_path`, `multiple_file_path`, `date_time`, `a`, `b`, `c`, `d`, `e`) VALUES
(1, 'Test Name 1', '9876541256', 'mail@mail.com', '', 'multiple_file/64152/', '2022-01-15 09:33:28 AM', 0, 0, 0, 0, 0),
(2, 'Test Name 1', '9876541256', 'mail@mail.com', '', 'multiple_file/44216/', '2022-01-15 09:34:18 AM', 0, 0, 0, 0, 0),
(3, 'Test Name 2', '9876541257', 'mail@mail.com', '', 'multiple_file/84180/', '2022-01-15 09:40:18 AM', 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `test_data`
--
ALTER TABLE `test_data`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `test_data`
--
ALTER TABLE `test_data`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
