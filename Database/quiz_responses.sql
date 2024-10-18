-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2024 at 11:48 PM
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
-- Table structure for table `quiz_responses`
--

CREATE TABLE `quiz_responses` (
  `id` int NOT NULL,
  `q1` varchar(255) DEFAULT NULL,
  `q2` varchar(255) DEFAULT NULL,
  `q3` varchar(255) DEFAULT NULL,
  `q4` varchar(255) DEFAULT NULL,
  `q5` varchar(255) DEFAULT NULL,
  `q6` varchar(255) DEFAULT NULL,
  `score` int DEFAULT NULL,
  `submission_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `quiz_responses`
--

INSERT INTO `quiz_responses` (`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `score`, `submission_time`) VALUES
(1, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-12 11:30:51'),
(2, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-12 11:43:46'),
(3, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-12 11:45:07'),
(4, '', '', '', '', '', '', 0, '2024-10-12 11:45:53'),
(5, '', '', '', '', '', '', 0, '2024-10-12 11:45:56'),
(6, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-12 11:46:05'),
(7, '', '', '', '', '', '', 0, '2024-10-12 11:46:40'),
(8, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-12 11:46:47'),
(9, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-12 11:47:02'),
(10, '', '', '', '', '', '', 0, '2024-10-12 11:48:07'),
(11, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-12 11:48:13'),
(12, '', '', '', '', '', '', 0, '2024-10-12 11:50:34'),
(13, '', '', '', '', '', '', 0, '2024-10-12 11:50:44'),
(14, '', '', '', '', '', '', 0, '2024-10-12 11:51:08'),
(15, 'A', 'A', 'B', 'B', 'B', 'A', 4, '2024-10-12 11:51:49'),
(16, '', '', '', '', '', '', 0, '2024-10-12 11:53:19'),
(17, 'A', 'A', 'B', 'B', 'B', 'A', 4, '2024-10-12 11:53:41'),
(18, '', '', '', '', '', '', 0, '2024-10-12 11:55:47'),
(19, '', '', '', '', '', '', 0, '2024-10-12 11:56:01'),
(20, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-12 11:56:22'),
(21, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-12 11:57:23'),
(22, '', '', '', '', '', '', 0, '2024-10-12 11:58:18'),
(23, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-12 11:58:27'),
(24, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-12 11:59:59'),
(25, '', '', '', '', '', '', 0, '2024-10-12 12:00:18'),
(26, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-12 12:00:32'),
(27, '', '', '', '', '', '', 0, '2024-10-12 12:00:46'),
(28, '', '', '', '', '', '', 0, '2024-10-12 12:01:08'),
(29, '', '', '', '', '', '', 0, '2024-10-12 12:01:39'),
(30, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-12 12:03:26'),
(31, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-12 12:06:00'),
(32, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-12 12:08:00'),
(33, '', '', '', '', '', '', 0, '2024-10-12 12:09:30'),
(34, '', '', '', '', '', '', 0, '2024-10-12 12:12:36'),
(35, '', '', '', '', '', '', 0, '2024-10-12 12:13:01'),
(36, 'A', 'A', 'A', 'B', 'A', 'A', 2, '2024-10-12 12:13:25'),
(37, '', '', '', '', '', '', 0, '2024-10-12 12:13:37'),
(38, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-14 15:21:16'),
(39, '', '', '', '', '', '', 0, '2024-10-16 17:35:56'),
(40, '', '', '', '', '', '', 0, '2024-10-17 14:36:10'),
(41, '', '', '', '', '', '', 0, '2024-10-17 14:42:38'),
(42, 'A', 'A', 'B', 'A', 'A', 'A', 2, '2024-10-17 14:54:54'),
(43, '', '', '', '', '', '', 0, '2024-10-17 14:55:02'),
(44, 'A', 'A', 'B', 'A', 'A', 'A', 2, '2024-10-17 14:55:13'),
(45, '', '', '', '', '', '', 0, '2024-10-17 14:56:26'),
(46, 'A', 'A', 'B', 'A', '', '', 1, '2024-10-17 14:57:41'),
(47, 'A', 'A', 'B', 'A', 'B', 'A', 3, '2024-10-17 14:57:51'),
(48, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-17 15:05:49'),
(49, '', '', '', '', '', '', 0, '2024-10-17 15:07:04'),
(50, 'A', 'A', 'A', 'A', 'A', 'A', 1, '2024-10-17 15:07:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz_responses`
--
ALTER TABLE `quiz_responses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz_responses`
--
ALTER TABLE `quiz_responses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
