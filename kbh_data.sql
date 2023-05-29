-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 10:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbh_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `Name` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Price` int(5) NOT NULL,
  `Mobile_Number` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_of_kbh`
--

CREATE TABLE `data_of_kbh` (
  `S.No.` int(4) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Mobile_Number` bigint(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Confirm_Password` varchar(100) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_of_kbh`
--

INSERT INTO `data_of_kbh` (`S.No.`, `Name`, `Mobile_Number`, `Username`, `Email_ID`, `Password`, `Confirm_Password`, `dt`) VALUES
(42, 'Saksham Salaria', 8219014554, 'Saksham_Salaria', 'sakshamsalaria2992k4@gmail.com', '@#IITJEE', '@#IITJEE', '2023-03-31 22:16:53'),
(43, 'jk', 6278127182, 'lphadjskwnd', 'sakshamsalaria2992k4@gmail.com', 'djklw', 'jkddq', '2023-04-01 22:09:41'),
(45, 'Sourabh', 6278127182, 'Sourabh_Awasthy', 'sourabh@gmail.com', '123', '123', '2023-04-02 01:36:28'),
(49, 'hj', 231, 'hjkl;', 'vhjkl;;', 'jkl', 'bnm', '2023-04-02 02:05:51'),
(50, 'hdgwqjk', 67829, 'hqwjkd', 'bewjkd', '1234', '1234', '2023-04-02 02:11:36'),
(51, 'Paul', 8219014554, 'Paul_Dirac', 'Paul@gmail.com', '1234', '1234', '2023-04-02 02:34:57'),
(52, 'alpha', 1234, 'alpa', '1@gmail.com', '123', '123', '2023-04-02 02:41:25'),
(53, '', 0, '', '', '', '', '2023-04-02 02:43:19'),
(54, 'hjk', 213, '1234`132', '1232134', '123', '123', '2023-04-02 02:48:37'),
(57, 'hjk', 8932, 'jkjkw', 'jwdkqw', '12', '12', '2023-04-02 02:49:41'),
(58, 'jwksaw', 7823, 'hjkwqjs', 'jwkqskw', '123', '123', '2023-04-02 03:42:19'),
(59, 'Akshansh', 12630273, 'Akshansh_Kaushal', 'Akshansh@gmail.com', '1234', '1234', '2023-04-02 15:15:19'),
(60, 'Ekansh', 79379328, 'Ekansh_Mahajan', 'Ekansh@gmail.com', '123', '123', '2023-04-02 20:23:38'),
(61, 'Saksham Salaria', 5678987651, 'hgkdewdew', '22hkwld@nith.ac.in', '123', '123', '2023-04-02 21:21:35'),
(64, 'suryansh', 79394, 'Suryansh_', '123@nith.ac.in', '123', '123', '2023-04-03 22:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `Name` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Mobile_Number` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `freelance`
--

CREATE TABLE `freelance` (
  `Name` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Price` int(5) NOT NULL,
  `Mobile_Number` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `freelance`
--

INSERT INTO `freelance` (`Name`, `Description`, `Price`, `Mobile_Number`) VALUES
('Saksham Salaria', 'hwk', 100, 8219014554),
('Saksham Salaria', '100', 100, 8219014554),
('Saksham Salaria', 'hi need someone to do my assignments', 100, 8219014554);

-- --------------------------------------------------------

--
-- Table structure for table `profile_data`
--

CREATE TABLE `profile_data` (
  `S.No.` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Mobile_Number` bigint(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Confirm_Password` varchar(100) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile_data`
--

INSERT INTO `profile_data` (`S.No.`, `Name`, `Mobile_Number`, `Username`, `Email_ID`, `Password`, `Confirm_Password`, `dt`) VALUES
(1, 'Saksham', 8219014554, 'Paul', '123@gmail.com', '123', '123', '0000-00-00 00:00:00'),
(1, 'Saksham', 8219014554, 'Paul', '123@gmail.com', '123', '123', '2023-03-31 22:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `Name` varchar(100) NOT NULL,
  `Trip_description` text NOT NULL,
  `Mobile_Number` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_of_kbh`
--
ALTER TABLE `data_of_kbh`
  ADD PRIMARY KEY (`S.No.`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_of_kbh`
--
ALTER TABLE `data_of_kbh`
  MODIFY `S.No.` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
