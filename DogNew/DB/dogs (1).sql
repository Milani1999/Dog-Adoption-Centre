-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220905.b20d7f3a04
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 03:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('Admin', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `adopted_dogs`
--

CREATE TABLE `adopted_dogs` (
  `Dog_ID` int(100) NOT NULL,
  `Dog_Image` longtext NOT NULL,
  `Adopted_Date` date NOT NULL,
  `Adopted_Place` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adopted_dogs`
--

INSERT INTO `adopted_dogs` (`Dog_ID`, `Dog_Image`, `Adopted_Date`, `Adopted_Place`) VALUES
(4, 'Dog 1.jpg', '2022-08-10', 'Badulla Town'),
(5, 'Dog 2.jpg', '2022-07-14', 'Badulla street 1'),
(6, 'Dog 3.jpg', '2022-08-04', 'Kandana'),
(7, 'Dog 4.jpg', '2022-08-06', 'Passara'),
(10, 'Dog 5.jpg', '2022-06-08', '3rd mile post'),
(11, 'Dog 6.jpg', '2022-08-02', 'Hindagoda'),
(12, 'Dog 7.jpg', '2022-06-16', 'Kailagoda'),
(13, 'Dog 8.jpg', '2022-05-18', 'Rockhill'),
(23, 'Dog 9.jpg', '2022-09-04', 'Hindagoda'),
(24, 'Dog 12.jpg', '2022-09-27', 'Kailagoda');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(500) NOT NULL,
  `d_material` varchar(500) NOT NULL,
  `d_contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`d_id`, `d_name`, `d_material`, `d_contact`) VALUES
(3, 'Food packs', 'Food packs', 712345698);

-- --------------------------------------------------------

--
-- Table structure for table `pending_adopt`
--

CREATE TABLE `pending_adopt` (
  `Informer_ID` int(11) NOT NULL,
  `Informer_Name` varchar(100) NOT NULL,
  `Informer_Contact` int(10) NOT NULL,
  `Place_Dog` varchar(100) NOT NULL,
  `Infromed_Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_adopt`
--

INSERT INTO `pending_adopt` (`Informer_ID`, `Informer_Name`, `Informer_Contact`, `Place_Dog`, `Infromed_Time`) VALUES
(90001, 'Milani', 71234567, 'Badulla', '2022-08-30 23:15:08'),
(90013, 'Nimal', 7123456, 'Badulla', '2022-08-31 09:26:50'),
(90025, 'Nimal Perera', 712345678, 'Badulla', '2022-09-05 10:47:43'),
(90026, 'Dog medicones - 200mg Hythone', 123456987, 'Dog medicones - 200mg Hythone', '2022-09-08 23:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `pending_seller`
--

CREATE TABLE `pending_seller` (
  `Dog_ID` int(11) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `User_Contact` int(10) NOT NULL,
  `Reserved_Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `selling`
--

CREATE TABLE `selling` (
  `Dog_ID` int(100) NOT NULL,
  `Customer_Name` varchar(100) NOT NULL,
  `Customer_Address` varchar(500) NOT NULL,
  `Customer_Contact` int(10) NOT NULL,
  `Status` varchar(30) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selling`
--

INSERT INTO `selling` (`Dog_ID`, `Customer_Name`, `Customer_Address`, `Customer_Contact`, `Status`) VALUES
(4, 'Kamal Perera', '43/B, Passara Road, Badulla', 712359684, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopted_dogs`
--
ALTER TABLE `adopted_dogs`
  ADD PRIMARY KEY (`Dog_ID`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `pending_adopt`
--
ALTER TABLE `pending_adopt`
  ADD PRIMARY KEY (`Informer_ID`);

--
-- Indexes for table `selling`
--
ALTER TABLE `selling`
  ADD KEY `Dog_ID` (`Dog_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopted_dogs`
--
ALTER TABLE `adopted_dogs`
  MODIFY `Dog_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pending_adopt`
--
ALTER TABLE `pending_adopt`
  MODIFY `Informer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90027;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `selling`
--
ALTER TABLE `selling`
  ADD CONSTRAINT `selling_ibfk_1` FOREIGN KEY (`Dog_ID`) REFERENCES `adopted_dogs` (`Dog_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
