-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 09:25 PM
-- Server version: 8.0.39
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driving_license`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `SN` int NOT NULL,
  `First_Name` varchar(100) DEFAULT NULL,
  `Last_Name` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(50) DEFAULT NULL,
  `Pass` varchar(255) DEFAULT NULL,
  `Reg_Date` datetime DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`SN`, `First_Name`, `Last_Name`, `Email`, `Phone`, `Pass`, `Reg_Date`) VALUES
(1, 'Ruth', 'Muraguri', 'ruthmuraguri@gmail.com', '0768427812', 'ruth1234', '2024-10-30 23:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `SN` int NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `License_Class` varchar(2000) NOT NULL,
  `Id_No` int NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Payment` int NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `Reg_Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`SN`, `First_Name`, `Last_Name`, `License_Class`, `Id_No`, `Email`, `Phone`, `Payment`, `Pass`, `Reg_Date`) VALUES
(3, 'Ruth', 'Muraguri', 'B', 34567773, 'ruth@gmail.com', '0723076762', 1000, '@ruth123', '2024-10-15 00:06:50'),
(4, 'Ismael', 'Bett', 'A', 27400044, 'bett@gmail.com', '0723070762', 1000, '@bett123', '2024-10-15 00:06:50'),
(5, 'Ismael', 'Bett', 'A', 4025443, 'xyz.termux@gmail.com', '0727405667', 3000, '1234', '2024-10-30 23:23:52'),
(11, 'Ruth', 'wanjiku', 'A', 433333, 'wanjiku@gmail.com', '0727405567', 300, '12345', '2024-11-03 22:29:11'),
(13, 'Ismael', 'Kirui', 'C', 45566888, 'termux@gmail.com', '072546778989', 300, '123456', '2024-11-03 22:31:52');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` int NOT NULL,
  `Driver_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Id_Num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `score` int DEFAULT NULL,
  `submission_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`id`, `Driver_Name`, `Category`, `Id_Num`, `score`, `submission_time`) VALUES
(3, 'Ruth', 'B', '34567773', 83, '2024-10-28 14:11:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`SN`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD UNIQUE KEY `Pass` (`Pass`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`SN`),
  ADD UNIQUE KEY `Id_No` (`Id_No`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD UNIQUE KEY `Pass` (`Pass`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Id_Num` (`Id_Num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `SN` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `SN` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
