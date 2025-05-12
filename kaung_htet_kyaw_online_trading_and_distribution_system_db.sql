-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2020 at 09:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airpollutiondb`
--
CREATE DATABASE IF NOT EXISTS `airpollutiondb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `airpollutiondb`;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `BrandID` int(30) NOT NULL,
  `BrandName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`BrandID`, `BrandName`) VALUES
(1, 'Dienmern'),
(2, 'NNNNN');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `CityID` int(50) NOT NULL,
  `CityName` varchar(50) NOT NULL,
  `CityImage` varchar(255) NOT NULL,
  `AirPollutionRate` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CityID`, `CityName`, `CityImage`, `AirPollutionRate`, `Description`) VALUES
(1, 'Yangon', '../Images/Yangon.jpg', '45%', 'as'),
(2, 'Mandalay', '../Images/Mandalay.jpg', '30%', 'rate');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactUsID` int(50) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL,
  `UserID` int(50) NOT NULL,
  `QuestionDate` date NOT NULL,
  `QuestionTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ContactUsID`, `Question`, `Answer`, `UserID`, `QuestionDate`, `QuestionTime`) VALUES
(1, 'How to project from Air Pollution?', 'as', 1, '2020-09-13', '01:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `HistoryID` int(11) NOT NULL,
  `PageName` varchar(255) NOT NULL,
  `AccessTime` time NOT NULL,
  `AccessDate` date NOT NULL,
  `UserID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`HistoryID`, `PageName`, `AccessTime`, `AccessDate`, `UserID`) VALUES
(1, 'FAQ.php', '03:43:10', '2020-09-26', '2'),
(2, 'FAQ.php', '03:43:38', '2020-09-26', '2'),
(3, 'ContactUs.php', '03:46:41', '2020-09-26', '2'),
(4, 'ContactUs.php', '03:47:37', '2020-09-26', '2'),
(5, 'ContactUs.php', '03:47:52', '2020-09-26', '2'),
(6, 'ContactUs.php', '03:48:09', '2020-09-26', '2'),
(7, 'ContactUs.php', '03:48:33', '2020-09-26', '2'),
(8, 'FAQ.php', '03:48:37', '2020-09-26', '2'),
(9, 'ContactUs.php', '03:50:28', '2020-09-26', '2'),
(10, 'FAQ.php', '03:50:30', '2020-09-26', '2'),
(11, 'ContactUs.php', '03:50:31', '2020-09-26', '2'),
(12, 'ContactUs.php', '03:56:09', '2020-09-26', '2'),
(13, 'FAQ.php', '03:56:10', '2020-09-26', '2'),
(14, 'FAQ.php', '03:56:13', '2020-09-26', '2'),
(15, 'FAQ.php', '03:57:21', '2020-09-26', '2'),
(16, 'FAQ.php', '03:57:49', '2020-09-26', '2'),
(17, 'ContactUs.php', '04:00:22', '2020-09-26', '2'),
(18, 'FAQ.php', '04:00:23', '2020-09-26', '2'),
(19, 'ContactUs.php', '04:00:41', '2020-09-26', '2'),
(20, 'FAQ.php', '04:00:42', '2020-09-26', '2'),
(21, 'ContactUs.php', '04:02:30', '2020-09-26', '2'),
(22, 'FAQ.php', '04:02:32', '2020-09-26', '2'),
(23, 'FAQ.php', '04:02:48', '2020-09-26', '2'),
(24, 'ContactUs.php', '04:02:49', '2020-09-26', '2'),
(25, 'ContactUs.php', '04:04:08', '2020-09-26', '2'),
(26, 'FAQ.php', '04:04:10', '2020-09-26', '2'),
(27, 'ContactUs.php', '04:05:12', '2020-09-26', '2'),
(28, 'FAQ.php', '09:23:11', '2020-09-27', '2'),
(29, 'ContactUs.php', '09:23:12', '2020-09-27', '2'),
(30, 'ContactUs.php', '09:23:29', '2020-09-27', '2'),
(31, 'FAQ.php', '09:23:32', '2020-09-27', '2'),
(32, 'ContactUs.php', '03:55:15', '2020-09-28', '2'),
(33, 'ContactUs.php', '03:56:57', '2020-09-28', '2'),
(34, 'ContactUs.php', '04:02:38', '2020-09-28', '2'),
(35, 'ContactUs.php', '04:02:39', '2020-09-28', '2'),
(36, 'ContactUs.php', '04:02:39', '2020-09-28', '2'),
(37, 'ContactUs.php', '04:02:40', '2020-09-28', '2'),
(38, 'ContactUs.php', '04:02:40', '2020-09-28', '2'),
(39, 'ContactUs.php', '04:02:41', '2020-09-28', '2'),
(40, 'ContactUs.php', '04:02:41', '2020-09-28', '2'),
(41, 'ContactUs.php', '04:05:44', '2020-09-28', '2'),
(42, 'ContactUs.php', '04:05:45', '2020-09-28', '2'),
(43, 'ContactUs.php', '04:05:46', '2020-09-28', '2'),
(44, 'ContactUs.php', '04:06:31', '2020-09-28', '2'),
(45, 'ContactUs.php', '04:06:32', '2020-09-28', '2'),
(46, 'UserUpdate.php', '04:06:45', '2020-09-28', '2'),
(47, 'UserUpdate.php', '04:06:48', '2020-09-28', '2'),
(48, 'UserUpdate.php', '04:07:06', '2020-09-28', '2'),
(49, 'ContactUs.php', '04:07:16', '2020-09-28', '2'),
(50, 'ContactUs.php', '04:07:55', '2020-09-28', '2'),
(51, 'ContactUs.php', '04:07:58', '2020-09-28', '2'),
(52, 'FAQ.php', '11:49:52', '2020-09-29', '2'),
(53, 'ContactUs.php', '11:49:54', '2020-09-29', '2'),
(54, 'FAQ.php', '11:50:01', '2020-09-29', '2'),
(55, 'ContactUs.php', '11:50:11', '2020-09-29', '2'),
(56, 'ContactUs.php', '03:37:46', '2020-09-29', '2'),
(57, 'UserUpdate.php', '03:37:47', '2020-09-29', '2'),
(58, 'UserUpdate.php', '03:38:33', '2020-09-29', '2'),
(59, 'ContactUs.php', '03:47:52', '2020-09-29', '3'),
(60, 'FAQ.php', '03:48:16', '2020-09-29', '3'),
(61, 'ContactUs.php', '03:51:33', '2020-09-29', '3'),
(62, 'FAQ.php', '03:55:05', '2020-09-29', '3'),
(63, 'FAQ.php', '03:57:42', '2020-09-29', '3'),
(64, 'UserUpdate.php', '03:59:04', '2020-09-29', '3'),
(65, 'ContactUs.php', '03:59:07', '2020-09-29', '3'),
(66, 'FAQ.php', '03:59:08', '2020-09-29', '3'),
(67, 'UserUpdate.php', '04:02:12', '2020-09-29', '3'),
(68, 'ContactUs.php', '04:02:15', '2020-09-29', '3'),
(69, 'FAQ.php', '04:02:15', '2020-09-29', '3'),
(70, 'FAQ.php', '04:08:47', '2020-09-29', '3'),
(71, 'UserUpdate.php', '04:09:09', '2020-09-29', '3'),
(72, 'UserUpdate.php', '04:25:46', '2020-09-29', '3'),
(73, 'ContactUs.php', '04:25:48', '2020-09-29', '3'),
(74, 'FAQ.php', '04:25:49', '2020-09-29', '3'),
(75, 'FAQ.php', '04:36:15', '2020-09-29', '3'),
(76, 'ContactUs.php', '04:36:17', '2020-09-29', '3'),
(77, 'ContactUs.php', '04:36:49', '2020-09-29', '3'),
(78, 'ContactUs.php', '04:36:51', '2020-09-29', '3'),
(79, 'ContactUs.php', '04:38:32', '2020-09-29', '3'),
(80, 'FAQ.php', '04:38:41', '2020-09-29', '3');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(30) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductImage` varchar(255) NOT NULL,
  `BrandName` varchar(50) NOT NULL,
  `Quantity` varchar(30) NOT NULL,
  `Price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `ProductImage`, `BrandName`, `Quantity`, `Price`) VALUES
(1, 'Multi-functionAir quality detector', '../Images/bathroom.jpg', 'Dienmern', '5', '48'),
(2, 'dsfsdfsdf', '../Images/double_room2.jpg', 'NNNNN', '3', '30');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(50) NOT NULL,
  `StaffName` varchar(30) NOT NULL,
  `Age` varchar(80) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffName`, `Age`, `Email`, `Password`, `Address`) VALUES
(1, 'Tun Kyaw', '34', 'tunkyaw4@gmail.com', '123456', '			Yangon    '),
(2, 'Naing', '20', 'naing@gmail.com', 'naing', 'naing'),
(4, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(50) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FreeKit` varchar(50) NOT NULL,
  `DateofBirth` varchar(255) NOT NULL,
  `PostalAddress` varchar(255) NOT NULL,
  `Postcode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FullName`, `Email`, `Password`, `FreeKit`, `DateofBirth`, `PostalAddress`, `Postcode`) VALUES
(1, 'Maung Maung', 'maungmaung1@gmail.com', '123456', 'Not Claim', '2020-09-02', '	Yangon			\r\n			    ', '1234'),
(2, 'Zaw Zaw', 'zawzaw2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Claim', '1993-10-06', '				\r\n		Mandalay	    ', '1234'),
(3, 'Tun Kyaw', 'tunkyaw3@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Not Claim', '1981-07-07', '		Bago		\r\n			    ', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`BrandID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CityID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactUsID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`HistoryID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `BrandID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `CityID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactUsID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `HistoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Database: `air_pollution`
--
CREATE DATABASE IF NOT EXISTS `air_pollution` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `air_pollution`;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `BrandID` int(11) NOT NULL,
  `BrandName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`BrandID`, `BrandName`) VALUES
(1, 'Dell'),
(2, 'Lenovo');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `CityID` int(11) NOT NULL,
  `CityName` varchar(30) NOT NULL,
  `AirPollutionRate` int(255) NOT NULL,
  `CityImage` varchar(225) NOT NULL,
  `Description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CityID`, `CityName`, `AirPollutionRate`, `CityImage`, `Description`) VALUES
(6, 'Myanmar', 20, 'images/double_room_asss3.jpg', 'ssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactUsID` int(11) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `QuestionDate` date NOT NULL,
  `QuestionTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ContactUsID`, `Question`, `Answer`, `CustomerID`, `QuestionDate`, `QuestionTime`) VALUES
(1, 'what is air pollution?', 'NULL', 13, '2020-09-29', '00:00:00'),
(2, 'what is air pollution?', 'NULL', 13, '2020-09-29', '838:59:59'),
(3, 'what is air pollution?', 'NULL', 13, '2020-09-29', '838:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `DateofBirth` date NOT NULL,
  `PostalAddress` varchar(225) NOT NULL,
  `PostCode` varchar(10) NOT NULL,
  `FreeKit` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerName`, `Email`, `Password`, `DateofBirth`, `PostalAddress`, `PostCode`, `FreeKit`) VALUES
(1, 'Pann Ei', 'phyu@gmail.com', '1234', '2020-12-31', 'asdf', '021', ''),
(10, 'hlahla', 'hla@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2000-02-21', 'address', '001', 'Not Claim'),
(11, 'Pann Ei', 'PEP@gmail.com', '9b5eb947ab0bd16101c51a64a5e42033', '2017-11-02', 'asdf', '002', 'Not Claim'),
(12, 'hlahla', 'hh@gmail.com', '2f55c3c0d10571b03cb3deb89f338a65', '2019-12-31', 'address', '021021', 'Not Claim'),
(13, 'aung kaung', 'ak@gmail.com', 'd0c9581d56738e8646a034b30e0a877c', '2000-12-22', 'address', '125', 'Claim'),
(14, 'phyophyo', 'pp@gmail.com', '4339c409ae4ed4538d9705ee44dff895', '2000-12-12', 'address', '123456', 'Claim'),
(17, 'Sitt', 'sitt@gmail.com', '37a1ef0894259cb4fc8ead99b9b1eb12', '2000-01-01', '1', '1121', 'Not Claim'),
(18, 'Naing', 'naing@gmail.com', '3c06baaf28637a8d3459a2ec9fa270da', '2000-01-02', 'No(1)', '1121', 'Claim');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `HistoryID` int(11) NOT NULL,
  `PageName` varchar(30) NOT NULL,
  `AccessTime` time NOT NULL,
  `AccessDate` date NOT NULL,
  `CustomerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`HistoryID`, `PageName`, `AccessTime`, `AccessDate`, `CustomerID`) VALUES
(1, 'ContactUs.php', '00:20:20', '0000-00-00', 13),
(2, 'ContactUs.php', '00:20:20', '0000-00-00', 13),
(3, 'ContactUs.php', '00:20:20', '0000-00-00', 13),
(4, 'ContactUs.php', '00:20:20', '2011-08-22', 13),
(5, 'ContactUs.php', '11:27:20', '2020-09-29', 13),
(6, 'ContactUs.php', '11:27:46', '2020-09-29', 13),
(7, 'ContactUs.php', '11:31:16', '2020-09-29', 13),
(8, 'ContactUs.php', '11:32:45', '2020-09-29', 13),
(9, 'ContactUs.php', '11:33:05', '2020-09-29', 13),
(10, 'ContactUs.php', '11:34:22', '2020-09-29', 13),
(11, 'ContactUs.php', '11:34:35', '2020-09-29', 13),
(12, 'FAQ.php', '00:20:20', '0000-00-00', 13),
(13, 'ContactUs.php', '01:24:50', '2020-09-29', 13),
(14, 'ContactUs.php', '01:30:32', '2020-09-29', 13),
(15, 'ContactUs.php', '01:31:36', '2020-09-29', 13),
(16, 'ContactUs.php', '01:33:35', '2020-09-29', 13),
(17, 'ContactUs.php', '01:34:51', '2020-09-29', 13),
(18, 'ContactUs.php', '01:35:01', '2020-09-29', 13),
(19, 'ContactUs.php', '01:35:07', '2020-09-29', 13),
(20, 'ContactUs.php', '02:05:48', '2020-10-03', 13),
(21, 'ContactUs.php', '02:07:02', '2020-10-03', 13),
(22, 'FAQ.php', '00:20:20', '2002-07-31', 13),
(23, 'FAQ.php', '00:20:20', '0000-00-00', 14),
(24, 'FAQ.php', '00:20:20', '0000-00-00', 14),
(25, 'ContactUs.php', '09:22:45', '2020-10-04', 14),
(26, 'FAQ.php', '00:20:20', '0000-00-00', 14),
(27, 'FAQ.php', '00:20:20', '0000-00-00', 18);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(255) NOT NULL,
  `ProductImage` varchar(255) NOT NULL,
  `BrandID` int(15) NOT NULL,
  `Quantity` int(15) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `ProductImage`, `BrandID`, `Quantity`, `Price`) VALUES
(1, 'Computer1', 'images/double_room_asss.jpg', 2, 5, 500),
(2, '', '', 0, 0, 0),
(3, 'Mask', 'images/double_room3.jpg', 2, 2, 500),
(4, '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(15) NOT NULL,
  `StaffName` varchar(30) NOT NULL,
  `Email` int(30) NOT NULL,
  `Password` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffName`, `Email`, `Password`) VALUES
(2, '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`BrandID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CityID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactUsID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`HistoryID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `BrandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `CityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactUsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `HistoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `hotel`
--
CREATE DATABASE IF NOT EXISTS `hotel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hotel`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `create_account`
--

CREATE TABLE `create_account` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `country` varchar(50) NOT NULL,
  `pictrure` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_account`
--

INSERT INTO `create_account` (`id`, `name`, `email`, `password`, `mobile`, `address`, `gender`, `country`, `pictrure`) VALUES
(4, 'sunil Vishwakarma', 'amitvish9999@gmail.com', '8190', 7275308190, 'kolpanday,azamgarh', 'male', 'China', 'img2.png'),
(7, 'suraj vishwakarma', 'suraj@gmail.com', '8190', 9120140055, 'kolpanday,azamgarh', 'male', 'India', 'Capture.PNG'),
(8, 'Om', 'om@gmail.com', '8090', 7890809, 'bnjkghjbjb', 'male', 'india', ''),
(9, 'Ragini Vishwakarma', 'ragini@gmail.com', '1234`', 7275540965, 'kolpanday(Kolgghat),Azamgarh', 'male', 'India', '6cy5bLaei.jpg'),
(10, 'Anjali Vishwakarma', 'anjali@gmail.com', '123', 7275308190, 'kolpanday azamgarh', 'male', 'India', 'God_Shiva_Wallpaper.jpg'),
(11, 'mrityunjai', 'mr8090@gmail.com', '8190', 71727534567, 'kolpghta', 'male', 'India', 'amazing-shiv-shankar-images-3d-shiva-on-pinterest-shiv-shankar-images-3d.jpg'),
(12, 'sanjeev', 'sanjeevtech2@gmail.com', '1234', 9015501897, 'Noida', 'male', 'India', '20171120_175518.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `details_slider`
--

CREATE TABLE `details_slider` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `caption` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'Amit', 'amitvish9999@gmail.com', 7275308190, 'Nice');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` bigint(20) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_no`, `type`, `price`, `details`, `image`) VALUES
(28, 512, 'Deluxe Room', 15000, 'The Contemporary yet simple designed King bedded rooms are well equipped with modern amenities. Fresh Decor and refined ambiance is the winning combination to make these rooms an ideal choice for discerning business traveler.', 'delux_img1.jpg'),
(30, 504, 'Luxurious Suite', 16000, 'Engulf yourself in the plush luxury of our premier rooms. An upgraded version of the Suite room, these rooms offer an elegant design with larger room space.', 'Luxury_img10.jpg'),
(31, 302, 'Standard Room', 14000, 'Simple design king bedded room are well equipped with modern amenities.', 'Standard _img16.jpg'),
(32, 312, 'Suite', 13000, 'Enjoy the view of Anand from attach sitting area, An upgraded version of the Deluxe room, these rooms offer an elegant design with larger room space.', 'Suit_img22.jpg'),
(33, 205, 'Twin Deluxe Room', 120000, 'The Contemporary yet simple designed twin bedded rooms are well equipped with modern amenities. Fresh Decor and refined ambiance is the winning combination to make these rooms an ideal choice for discerning business traveler.', 'Twin_img24.jpg'),
(34, 0, 'Parking Area', 0, 'ON-SITE PARKING Comfort Hotel Perth City provides 33 secure car parking spaces, free-of-charge for house guests which are subject to availability and on a ...\r\n', 'parking.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room_booking_details`
--

CREATE TABLE `room_booking_details` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(20) NOT NULL,
  `contry` varchar(50) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_in_time` varchar(6) NOT NULL,
  `check_out_date` date NOT NULL,
  `Occupancy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `room_booking_details`
--

INSERT INTO `room_booking_details` (`id`, `name`, `email`, `phone`, `address`, `city`, `state`, `zip`, `contry`, `room_type`, `check_in_date`, `check_in_time`, `check_out_date`, `Occupancy`) VALUES
(5, 'Sumit', 'sumit@gmail.com', 7398713060, 'kolpanday,azamgarh', 'Azamgarh', 'U.P.', 276001, 'India', 'Deluxe Room', '2019-12-05', '12:00', '2019-01-06', 'single'),
(6, 'Om', 'om@gmail.com', 7890809, 'bnjkghjbjb', 'azamgarh', 'up', 276001, 'India', 'Deluxe Room', '2019-05-08', '08:00', '2019-06-04', 'single'),
(7, 'Ragini Vishwakarma', 'ragini@gmail.com', 727550965, 'Kolpanday,Kolghat,Azamgarh', 'Azamgarh', 'U.P', 276001, 'India', 'Standard Room', '2019-12-06', '08:00', '2019-12-06', 'single'),
(8, 'Anlaji viahwakarma', 'anjali@gmail.com', 7275308190, 'kolpanday azamgarh', 'azamgarh', 'U.P', 276001, 'India', 'Standard Room', '2019-12-06', '08:00', '2019-12-06', 'single'),
(12, 'sanjeev', 'sanjeevtech2@gmail.com', 0, 'dfjdlfj', '', '', 0, '', 'Suite Room', '2019-05-22', '22:57', '2017-10-31', 'single'),
(13, '', '', 0, '', '', '', 0, '', 'Deluxe Room', '2020-09-25', '', '2020-09-30', 'single');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `caption`) VALUES
(3, 'img3.jpg', ''),
(6, 'img2.jpg', ''),
(8, 'img1.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_account`
--
ALTER TABLE `create_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details_slider`
--
ALTER TABLE `details_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_booking_details`
--
ALTER TABLE `room_booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_account`
--
ALTER TABLE `create_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `details_slider`
--
ALTER TABLE `details_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `room_booking_details`
--
ALTER TABLE `room_booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Database: `hoteldb`
--
CREATE DATABASE IF NOT EXISTS `hoteldb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hoteldb`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` varchar(20) NOT NULL,
  `CustomerID` varchar(20) NOT NULL,
  `NRC_No` varchar(30) NOT NULL,
  `BookingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `CheckinDate` date NOT NULL,
  `CheckoutDate` date NOT NULL,
  `TotalDay` int(11) NOT NULL,
  `People` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetail`
--

CREATE TABLE `bookingdetail` (
  `BookingID` varchar(20) NOT NULL,
  `Room_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` varchar(15) NOT NULL,
  `CustomerName` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `DateOfBirth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerName`, `Address`, `PhoneNumber`, `Email`, `Password`, `DateOfBirth`) VALUES
('Cus_000001', 'Naing', 'No(1),Maharzayar Street', 123456, 'naing@gmail.com', 'naing', '2020-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `DeliveryID` varchar(30) NOT NULL,
  `DeliveryName` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `PhoneNumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `HotelID` int(11) NOT NULL,
  `HotelName` varchar(30) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`HotelID`, `HotelName`, `Image`, `Location`, `City`, `Description`) VALUES
(1, 'tgg', 'hotelimage/_images.jpg', 'ff', 'g', 'sdfghj');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `PackageID` int(11) NOT NULL,
  `PackageName` varchar(30) NOT NULL,
  `TicketPrice` varchar(30) NOT NULL,
  `PackageImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`PackageID`, `PackageName`, `TicketPrice`, `PackageImage`) VALUES
(1, 'Chaung Thar', '20000', 'images/__Kyait Hto Hotel in Kyait Hti Yoe.jpg'),
(2, 'CHAUNG THAR', '30000', 'images/_Ngwe Saung.jpg'),
(3, 'CHAUNG THAR', '35667', 'images/_Taunggyi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_ID` varchar(20) NOT NULL,
  `RoomType_ID` varchar(20) NOT NULL,
  `Available_Room` int(11) NOT NULL,
  `Maximum_Person` int(11) NOT NULL,
  `Image1` text NOT NULL,
  `Image2` text NOT NULL,
  `Image3` text NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Services` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_ID`, `RoomType_ID`, `Available_Room`, `Maximum_Person`, `Image1`, `Image2`, `Image3`, `Size`, `Services`) VALUES
('RM_000001', 'Rt_000001', 10, 2, 'images/_double_room_asss.jpg', 'images/_double_room3.jpg', 'images/_double_room1.jpg', '50 ft', 'Coffee Free, Mini Bar'),
('RM_000002', 'Rt_000003', 5, 2, 'images/_double_room3.jpg', 'images/_double_room1.jpg', 'images/_double_room2.jpg', '50 ft', 'Free Coffee, Mini Bar');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `RoomType_ID` varchar(20) NOT NULL,
  `RoomType_Name` varchar(30) NOT NULL,
  `Price` int(11) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`RoomType_ID`, `RoomType_Name`, `Price`, `Image`) VALUES
('Rt_000001', 'Superior', 200, 'images/_1.jpg'),
('Rt_000002', 'Single Room', 50, 'images/_single_room3.jpg'),
('Rt_000003', 'Double Room', 75, 'images/_double_room3.jpg'),
('Rt_000004', 'Luxury Room', 200, 'images/_luxury_room1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `ScheduleID` int(11) NOT NULL,
  `CarNo` varchar(30) NOT NULL,
  `HotelID` varchar(30) NOT NULL,
  `PackageID` varchar(30) NOT NULL,
  `Duration` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`ScheduleID`, `CarNo`, `HotelID`, `PackageID`, `Duration`, `StartDate`, `EndDate`, `Image`) VALUES
(1, '1', '1', '1', 0, '0000-00-00', '0000-00-00', '$filename'),
(2, '1', '1', '1', 3, '0000-00-00', '0000-00-00', 'images/_images.jpg'),
(3, '1', '1', '2', 3, '0000-00-00', '0000-00-00', 'images/_Drake.jpg'),
(4, '1', '1', '1', 3, '0000-00-00', '0000-00-00', 'images/_02-Post-Malone-press-by-Adam-Degross-2019-billboard-1548.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` varchar(15) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Position` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `Name`, `Position`, `Email`, `Password`) VALUES
('St_000001', 'Sitt', 'GM', 'sitt@gmail.com', 'sitt'),
('St_000002', 'Theint', 'HR', 'theint@gmail.com', 'theint'),
('St_000003', 'Naing Naing', 'FD', 'naing2@gmail.com', 'naing2'),
('St_000004', 'Aggar', 'HR', 'aggar@gmail.com', 'aggar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`DeliveryID`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`HotelID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`PackageID`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`ScheduleID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `HotelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `PackageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `ScheduleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `kaung_htet_kyaw_online_trading_and_distribution_system_db`
--
CREATE DATABASE IF NOT EXISTS `kaung_htet_kyaw_online_trading_and_distribution_system_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kaung_htet_kyaw_online_trading_and_distribution_system_db`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` varchar(20) NOT NULL,
  `CustomerName` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `NRCNumber` varchar(100) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `CustomerUsername` varchar(50) NOT NULL,
  `CustomerPassword` varchar(30) NOT NULL,
  `CustomerImage` text NOT NULL,
  `CustomerTypeID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerName`, `Age`, `DateOfBirth`, `Address`, `Gender`, `Email`, `NRCNumber`, `PhoneNumber`, `CustomerUsername`, `CustomerPassword`, `CustomerImage`, `CustomerTypeID`) VALUES
('C-000001', 'May May', 40, '2000-12-11', 'Mandalay', 'Male', 'May@gmail.com', '1234', '0931463', 'May', 'May', 'double_room2.jpg', 'CT-000001');

-- --------------------------------------------------------

--
-- Table structure for table `customertype`
--

CREATE TABLE `customertype` (
  `CustomerTypeID` varchar(20) NOT NULL,
  `CustomerType` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customertype`
--

INSERT INTO `customertype` (`CustomerTypeID`, `CustomerType`) VALUES
('CT-000001', 'Exists'),
('CT-000002', 'New Customer');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `DeliveryID` varchar(20) NOT NULL,
  `DeliveryDate` date NOT NULL,
  `Description` varchar(255) NOT NULL,
  `DeliveryRoute` varchar(200) NOT NULL,
  `DeliveryStaffID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deliverystaff`
--

CREATE TABLE `deliverystaff` (
  `DeliveryStaffID` varchar(20) NOT NULL,
  `DeliveryStaffName` varchar(80) NOT NULL,
  `Age` int(11) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `NRCNumber` varchar(150) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `DeliveryStaffUsername` varchar(50) NOT NULL,
  `DeliveryStaffPassword` varchar(30) NOT NULL,
  `DeliveryStaffImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliverystaff`
--

INSERT INTO `deliverystaff` (`DeliveryStaffID`, `DeliveryStaffName`, `Age`, `DateOfBirth`, `Gender`, `Email`, `NRCNumber`, `Address`, `PhoneNumber`, `DeliveryStaffUsername`, `DeliveryStaffPassword`, `DeliveryStaffImage`) VALUES
('DS-000001', 'Aung Aung', 19, '2000-11-12', 'Male', 'AungAung@gmail.com', 'Yangon', '12/thakana(N)9923321', '0934311012', 'Aung Aung', 'Aung', 'DeliveryStaffImage/');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DepartmentID` varchar(20) NOT NULL,
  `DepartmentName` varchar(30) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DepartmentID`, `DepartmentName`, `Description`) VALUES
('D-000001', 'Oil', 'This is Oil Department'),
('D-000002', 'Paper', 'This is Paper Department'),
('D-000003', 'Medicine', 'This is Medicine Department');

-- --------------------------------------------------------

--
-- Table structure for table `importcompany`
--

CREATE TABLE `importcompany` (
  `ImportID` varchar(20) NOT NULL,
  `ImportCompanyName` varchar(200) NOT NULL,
  `ImportName` varchar(150) NOT NULL,
  `ImportType` varchar(50) NOT NULL,
  `ImportDate` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `importcompany`
--

INSERT INTO `importcompany` (`ImportID`, `ImportCompanyName`, `ImportName`, `ImportType`, `ImportDate`, `Quantity`, `Description`) VALUES
('IC-000001', 'AA Pharmacy ', 'Neutrica', 'Medicine', '2020-12-01', 2500, 'This product is made in USA'),
('IC-000002', 'Eureka', 'Eureka Soybean oil', 'Oil', '2013-12-11', 2800, 'This Product is made  in USA');

-- --------------------------------------------------------

--
-- Table structure for table `importdetails`
--

CREATE TABLE `importdetails` (
  `ImportID` varchar(20) NOT NULL,
  `ProductID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `importdetails`
--

INSERT INTO `importdetails` (`ImportID`, `ProductID`) VALUES
('', '$ProductID'),
('', 'P-000001'),
('', 'P-000002'),
('', 'P-000003'),
('', 'P-000004'),
('', 'P-000005'),
('', 'P-000006'),
('', 'P-000007');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderID` varchar(20) NOT NULL,
  `ProductID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`OrderID`, `ProductID`) VALUES
('', 'P-000001'),
('O-000001', 'P-000002'),
('O-000001', 'P-000003'),
('O-000001', 'P-000004'),
('O-000002', 'P-000005'),
('O-000003', 'P-000004'),
('O-000003', 'P-000005');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` varchar(20) NOT NULL,
  `OrderDate` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Status` varchar(11) NOT NULL,
  `CustomerID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `OrderDate`, `Quantity`, `Status`, `CustomerID`) VALUES
('O-000001', '2020-10-11', 3, 'Pending', 'C-000001'),
('O-000002', '2020-10-11', 4, 'Pending', 'C-000001'),
('O-000003', '2020-10-12', 12, 'Pending', 'C-000001');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` varchar(20) NOT NULL,
  `PaymentType` varchar(20) NOT NULL,
  `CardNumber` varchar(30) NOT NULL,
  `Payment_Amount` int(11) NOT NULL,
  `TaxAmount` int(11) NOT NULL,
  `TotalAmount` int(11) NOT NULL,
  `First_Payment` int(11) NOT NULL,
  `Second_Payment` int(11) NOT NULL,
  `OrderID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `PaymentType`, `CardNumber`, `Payment_Amount`, `TaxAmount`, `TotalAmount`, `First_Payment`, `Second_Payment`, `OrderID`) VALUES
('PA-000001', 'CashOnDelivery', '', 24000, 1200, 0, 0, 0, 'O-000001'),
('PA-000002', 'CashOnDelivery', '', 800, 40, 840, 0, 0, 'O-000002'),
('PA-000003', 'CashOnDelivery', '', 16800, 840, 17640, 0, 0, 'O-000003');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` varchar(20) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Price` float NOT NULL,
  `ProductImage1` text NOT NULL,
  `ProductImage2` text NOT NULL,
  `ProductImage3` text NOT NULL,
  `ImportID` varchar(20) NOT NULL,
  `ProductTypeID` varchar(20) NOT NULL,
  `StaffID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductName`, `Brand`, `Quantity`, `Description`, `Price`, `ProductImage1`, `ProductImage2`, `ProductImage3`, `ImportID`, `ProductTypeID`, `StaffID`) VALUES
('P-000002', 'gg', 'ff', 123, 'good', 20000, 'ProductImage/_single_room.jpg', 'ProductImage/_food_court1.jpg', 'ProductImage/_bathroom_ass.jpg', 'IC-000001', 'PT-000001', 'S-000001'),
('P-000003', 'aa', 'a', 123, 'dfs', 30000, 'ProductImage/_king-deluxe-room1.jpg', 'ProductImage/_double_room1.jpg', 'ProductImage/_double_room_asss3.jpg', 'IC-000002', 'PT-000001', 'S-000002'),
('P-000006', 'a', 'a', 2, 'aaaa', 200, 'ProductImage/_food_court1.jpg', 'ProductImage/_double_room3.jpg', 'ProductImage/_double_room1.jpg', 'IC-000001', 'PT-000001', ''),
('P-000007', 'b', 'b', 2, 'bbbb', 100, 'ProductImage/_double_room_asss1.jpg', 'ProductImage/_double_room3.jpg', 'ProductImage/_double_room2.jpg', 'IC-000002', 'PT-000002', 'S-000002');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `ProductTypeID` varchar(20) NOT NULL,
  `ProductType` varchar(30) NOT NULL,
  `ProductSpecificType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`ProductTypeID`, `ProductType`, `ProductSpecificType`) VALUES
('PT-000001', 'Oil', 'Sesame'),
('PT-000002', 'Paper', 'A4 Legal');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `PurchaseID` varchar(20) NOT NULL,
  `PurchaseDate` date NOT NULL,
  `Purchase` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Purchase_Amount` float NOT NULL,
  `First_Purchase` float NOT NULL,
  `Second_Purchase` float NOT NULL,
  `Description` varchar(100) NOT NULL,
  `SupplierID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`PurchaseID`, `PurchaseDate`, `Purchase`, `Quantity`, `Purchase_Amount`, `First_Purchase`, `Second_Purchase`, `Description`, `SupplierID`) VALUES
('PU-000001', '2020-09-28', 'Eureka Soybean Oil', 1800, 21780000, 10890000, 10890000, 'This is the great soybean oil made in USA.', 'SU-000004'),
('PU-000002', '2020-09-28', 'Tylenol', 200, 40000000, 20000000, 20000000, 'This is the pain relief medicine', 'SU-000004');

-- --------------------------------------------------------

--
-- Table structure for table `purchasedetails`
--

CREATE TABLE `purchasedetails` (
  `PurchaseID` varchar(20) NOT NULL,
  `ProductID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchasedetails`
--

INSERT INTO `purchasedetails` (`PurchaseID`, `ProductID`) VALUES
('', 'P-000001'),
('', 'P-000002'),
('', 'P-000003'),
('', 'P-000004'),
('', 'P-000005'),
('', 'P-000006'),
('', 'P-000007'),
('PU-000001', ''),
('PU-000002', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` varchar(20) NOT NULL,
  `StaffName` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Role` varchar(20) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `NRCNumber` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `StaffUsername` varchar(50) NOT NULL,
  `StaffPassword` varchar(30) NOT NULL,
  `StaffImage` text NOT NULL,
  `DepartmentID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffName`, `Age`, `Gender`, `Role`, `DateOfBirth`, `Address`, `Email`, `NRCNumber`, `PhoneNumber`, `StaffUsername`, `StaffPassword`, `StaffImage`, `DepartmentID`) VALUES
('S-000001', 'Theint', 21, 'Male', 'Stationary Item Staf', '1999-01-22', 'No(1)', 'theint@gmail.com', '12/Pa Za Ta(N)000000', '123456789', 'Theint', 'theint', 'double_room_asss3.jpg', 'D-000002'),
('S-000002', 'Sitt', 20, 'Male', 'Medicine Staff', '1111-11-11', 'No91)', 'sitt@gmail.com', '32143456', '123456789', 'sitt', 'theint', 'double_room2.jpg', 'D-000003');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `SupplierID` varchar(20) NOT NULL,
  `SupplierName` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `NRCNumber` varchar(100) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `SupplierUsername` varchar(50) NOT NULL,
  `SupplierPassword` varchar(30) NOT NULL,
  `SupplierImage` varchar(200) NOT NULL,
  `SupplierTypeID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`SupplierID`, `SupplierName`, `Age`, `DateOfBirth`, `Address`, `Gender`, `Email`, `NRCNumber`, `PhoneNumber`, `SupplierUsername`, `SupplierPassword`, `SupplierImage`, `SupplierTypeID`) VALUES
('SU-000001', 'Kaung Htet Kyaw', 18, '2001-12-17', 'Yangon', 'Male', 'kaunghtetkyaw@gmail.com', '123', '0123', 'khk', '8d26f1078908621fe036418a8e9d32', '_Bullet.png', 'SUT-000001'),
('SU-000004', 'Alex', 19, '2000-12-13', 'United States', 'Male', 'Alex@gmail.com', '12344', '+14054125', 'Alex', 'Alex', 'SupplierImage/_____3_http _static.theiconic.com.au_p_adidas-originals-9687-960243-3.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `suppliertype`
--

CREATE TABLE `suppliertype` (
  `SupplierTypeID` varchar(20) NOT NULL,
  `SupplierType` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliertype`
--

INSERT INTO `suppliertype` (`SupplierTypeID`, `SupplierType`) VALUES
('SUT-000001', 'New');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `customertype`
--
ALTER TABLE `customertype`
  ADD PRIMARY KEY (`CustomerTypeID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DepartmentID`);

--
-- Indexes for table `importcompany`
--
ALTER TABLE `importcompany`
  ADD PRIMARY KEY (`ImportID`);

--
-- Indexes for table `importdetails`
--
ALTER TABLE `importdetails`
  ADD PRIMARY KEY (`ImportID`,`ProductID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`OrderID`,`ProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`ProductTypeID`);

--
-- Indexes for table `purchasedetails`
--
ALTER TABLE `purchasedetails`
  ADD PRIMARY KEY (`PurchaseID`,`ProductID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SupplierID`);

--
-- Indexes for table `suppliertype`
--
ALTER TABLE `suppliertype`
  ADD PRIMARY KEY (`SupplierTypeID`);
--
-- Database: `l5dc74dw`
--
CREATE DATABASE IF NOT EXISTS `l5dc74dw` DEFAULT CHARACTER SET latin1 COLLATE latin1_danish_ci;
USE `l5dc74dw`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` varchar(15) COLLATE latin1_danish_ci NOT NULL,
  `AdminName` varchar(30) COLLATE latin1_danish_ci NOT NULL,
  `Email` varchar(255) COLLATE latin1_danish_ci NOT NULL,
  `Password` varchar(30) COLLATE latin1_danish_ci NOT NULL,
  `Phone` int(30) NOT NULL,
  `Address` varchar(255) COLLATE latin1_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `AdminName`, `Email`, `Password`, `Phone`, `Address`) VALUES
('1', 'aung zaw', 'aungzawemail.com', '123456', 944764985, ''),
('2', 'mg mg', 'mgmggmail.com', '123456', 2147483647, 'yangon');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `BrandID` varchar(15) COLLATE latin1_danish_ci NOT NULL,
  `BrandName` varchar(30) COLLATE latin1_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`BrandID`, `BrandName`) VALUES
('4', 'get');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryID` varchar(15) COLLATE latin1_danish_ci NOT NULL,
  `CategoryName` varchar(30) COLLATE latin1_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryID`, `CategoryName`) VALUES
('1', 'wet');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(30) COLLATE latin1_danish_ci DEFAULT NULL,
  `Email` varchar(30) COLLATE latin1_danish_ci DEFAULT NULL,
  `Password` varchar(15) COLLATE latin1_danish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerName`, `Email`, `Password`) VALUES
(1, 'Mg Mg', 'mgmgemail.com', '123456'),
(2, 'Mg Mg', 'mgmgemail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` varchar(15) COLLATE latin1_danish_ci NOT NULL,
  `OrderDate` date NOT NULL,
  `TotalQuantity` int(11) NOT NULL,
  `TotalAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `OrderDate`, `TotalQuantity`, `TotalAmount`) VALUES
('O-000001', '2020-08-19', 2, 50),
('O-000002', '2020-08-24', 6, 150),
('O-000003', '2020-08-24', 6, 150);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product ID` varchar(15) COLLATE latin1_danish_ci NOT NULL,
  `Product Name` varchar(30) COLLATE latin1_danish_ci NOT NULL,
  `Product Image` varchar(255) COLLATE latin1_danish_ci NOT NULL,
  `BrandID` varchar(15) COLLATE latin1_danish_ci NOT NULL,
  `CategoryID` varchar(15) COLLATE latin1_danish_ci NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product ID`, `Product Name`, `Product Image`, `BrandID`, `CategoryID`, `Quantity`, `Price`) VALUES
('P.00001', 'Mg Mg', 'Image/8-DSDM-principles.png', '4', '1', 10, 23),
('P.00002', 'Aung Aung', 'Image/Agile(Topic-1).PNG', '4', '1', 13, 27);

-- --------------------------------------------------------

--
-- Table structure for table `productorder`
--

CREATE TABLE `productorder` (
  `OrderID` varchar(15) COLLATE latin1_danish_ci NOT NULL,
  `ProductID` varchar(15) COLLATE latin1_danish_ci NOT NULL,
  `BuyQuantity` int(11) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_danish_ci;

--
-- Dumping data for table `productorder`
--

INSERT INTO `productorder` (`OrderID`, `ProductID`, `BuyQuantity`, `Amount`) VALUES
('O-000001', 'P.00001', 1, 23),
('O-000001', 'P.00002', 1, 27),
('O-000002', 'P.00001', 3, 69),
('O-000002', 'P.00002', 3, 81),
('O-000003', 'P.00001', 3, 69),
('O-000003', 'P.00002', 3, 81);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`BrandID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"kaung_htet_kyaw_online_trading_and_distribution_system_db\",\"table\":\"staff\"},{\"db\":\"kaung_htet_kyaw_online_trading_and_distribution_system_db\",\"table\":\"payment\"},{\"db\":\"kaung_htet_kyaw_online_trading_and_distribution_system_db\",\"table\":\"orders\"},{\"db\":\"kaung_htet_kyaw_online_trading_and_distribution_system_db\",\"table\":\"customer\"},{\"db\":\"kaung_htet_kyaw_online_trading_and_distribution_system_db\",\"table\":\"orderdetails\"},{\"db\":\"kaung_htet_kyaw_online_trading_and_distribution_system_db\",\"table\":\"product\"},{\"db\":\"kaung_htet_kyaw_online_trading_and_distribution_system_db\",\"table\":\"producttype\"},{\"db\":\"kaung_htet_kyaw_online_trading_and_distribution_system_db\",\"table\":\"importcompany\"},{\"db\":\"kaung_htet_kyaw_online_trading_and_distribution_system_db\",\"table\":\"customertype\"},{\"db\":\"kaung_htet_kyaw_online_trading_and_distribution_system_db\",\"table\":\"department\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'hoteldb', 'customer', '[]', '2020-09-23 15:15:11'),
('root', 'kaung_htet_kyaw_online_trading_and_distribution_system_db', 'staff', '[]', '2020-10-11 07:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2020-10-12 07:22:46', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
