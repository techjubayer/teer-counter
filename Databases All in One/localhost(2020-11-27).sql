-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2020 at 09:39 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teerctkk_teercommonnumber`
--
CREATE DATABASE IF NOT EXISTS `teerctkk_teercommonnumber` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `teerctkk_teercommonnumber`;

-- --------------------------------------------------------

--
-- Table structure for table `juwai_common`
--

CREATE TABLE `juwai_common` (
  `Date` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Numbers` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `House` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Ending` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `juwai_common`
--

INSERT INTO `juwai_common` (`Date`, `Numbers`, `House`, `Ending`) VALUES
('2020-11-27', '18, 36, 27, 30,\r\n49, 91, 52', '3, 8', '7, 4');

-- --------------------------------------------------------

--
-- Table structure for table `khanapara_common`
--

CREATE TABLE `khanapara_common` (
  `Date` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Numbers` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `House` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Ending` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khanapara_common`
--

INSERT INTO `khanapara_common` (`Date`, `Numbers`, `House`, `Ending`) VALUES
('2020-11-27', '20, 15, 35, 04,\n60, 42, 28', '7, 2', '3, 5');

-- --------------------------------------------------------

--
-- Table structure for table `shillong_common`
--

CREATE TABLE `shillong_common` (
  `Date` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Numbers` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `House` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Ending` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shillong_common`
--

INSERT INTO `shillong_common` (`Date`, `Numbers`, `House`, `Ending`) VALUES
('2020-11-27', '73, 04, 53, 84,\n23, 42, 78', '0,1', '3,2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `juwai_common`
--
ALTER TABLE `juwai_common`
  ADD PRIMARY KEY (`Date`);

--
-- Indexes for table `khanapara_common`
--
ALTER TABLE `khanapara_common`
  ADD PRIMARY KEY (`Date`);

--
-- Indexes for table `shillong_common`
--
ALTER TABLE `shillong_common`
  ADD PRIMARY KEY (`Date`);
--
-- Database: `teerctkk_teerresults`
--
CREATE DATABASE IF NOT EXISTS `teerctkk_teerresults` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `teerctkk_teerresults`;

-- --------------------------------------------------------

--
-- Table structure for table `juwai_results`
--

CREATE TABLE `juwai_results` (
  `Date` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `F_R` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `S_R` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'xx',
  `FR_P_Time` timestamp NULL DEFAULT NULL,
  `SR_P_Time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `juwai_results`
--

INSERT INTO `juwai_results` (`Date`, `F_R`, `S_R`, `FR_P_Time`, `SR_P_Time`) VALUES
('2020-10-24', '98', '95', '2020-11-27 09:37:27', '2020-11-27 09:37:29'),
('2020-10-26', '57', '64', '2020-11-27 09:36:24', '2020-11-27 09:36:26'),
('2020-10-27', '47', '46', '2020-11-27 09:35:35', '2020-11-27 09:35:36'),
('2020-10-28', '34', '24', '2020-11-27 09:34:28', '2020-11-27 09:34:32'),
('2020-10-29', '28', '80', '2020-11-27 09:33:26', '2020-11-27 09:33:27'),
('2020-10-30', '95', '11', '2020-11-27 09:32:31', '2020-11-27 09:32:32'),
('2020-10-31', '37', '84', '2020-11-27 09:31:26', '2020-11-27 09:31:27'),
('2020-11-02', '78', '35', '2020-11-27 09:28:30', '2020-11-27 09:28:31'),
('2020-11-03', '61', '38', '2020-11-27 09:26:31', '2020-11-27 09:26:33'),
('2020-11-04', '94', '73', '2020-11-27 09:25:32', '2020-11-27 09:25:34'),
('2020-11-05', '62', '96', '2020-11-27 09:24:29', '2020-11-27 09:24:31'),
('2020-11-06', '37', '84', '2020-11-27 09:23:23', '2020-11-27 09:23:26'),
('2020-11-07', '81', '30', '2020-11-27 09:22:26', '2020-11-27 09:22:28'),
('2020-11-09', '33', '51', '2020-11-27 09:21:31', '2020-11-27 09:21:32'),
('2020-11-10', '91', '38', '2020-11-27 09:20:24', '2020-11-27 09:20:26'),
('2020-11-11', '44', '77', '2020-11-27 09:19:23', '2020-11-27 09:19:24'),
('2020-11-12', '97', '31', '2020-11-27 09:14:31', '2020-11-27 09:14:33'),
('2020-11-13', '90', '80', '2020-11-27 09:13:34', '2020-11-27 09:13:36'),
('2020-11-14', '87', '64', '2020-11-27 09:11:19', '2020-11-27 09:11:21'),
('2020-11-16', '39', '46', '2020-11-27 09:10:13', '2020-11-27 09:10:15'),
('2020-11-17', '49', '94', '2020-11-27 09:07:53', '2020-11-27 09:07:55'),
('2020-11-18', '96', '24', '2020-11-27 09:06:58', '2020-11-27 09:07:00'),
('2020-11-19', '99', '86', '2020-11-27 09:05:57', '2020-11-27 09:06:01'),
('2020-11-20', '47', '57', '2020-11-27 09:02:50', '2020-11-27 09:02:57'),
('2020-11-21', '10', '43', NULL, NULL),
('2020-11-23', 'Off', 'Off', NULL, NULL),
('2020-11-24', '27', '89', NULL, NULL),
('2020-11-25', '86', '24', NULL, NULL),
('2020-11-26', '61', '83', '2020-11-21 13:50:00', '2020-11-18 11:12:53'),
('2020-11-27', '27', '41', '2020-11-27 08:27:32', '2020-11-27 09:16:50');

-- --------------------------------------------------------

--
-- Table structure for table `khanapara_results`
--

CREATE TABLE `khanapara_results` (
  `Date` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `F_R` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `S_R` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'xx',
  `FR_P_Time` timestamp NULL DEFAULT NULL,
  `SR_P_Time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khanapara_results`
--

INSERT INTO `khanapara_results` (`Date`, `F_R`, `S_R`, `FR_P_Time`, `SR_P_Time`) VALUES
('2020-10-24', '57', '39', '2020-11-27 09:37:43', '2020-11-27 09:37:45'),
('2020-10-26', 'Off', 'Off', '2020-11-27 09:36:42', '2020-11-27 09:36:44'),
('2020-10-27', '28', '20', '2020-11-27 09:35:46', '2020-11-27 09:35:48'),
('2020-10-28', '86', '90', '2020-11-27 09:34:45', '2020-11-27 09:34:47'),
('2020-10-29', '73', '22', '2020-11-27 09:33:42', '2020-11-27 09:33:44'),
('2020-10-30', '20', '11', '2020-11-27 09:32:47', '2020-11-27 09:32:48'),
('2020-10-31', '92', '29', '2020-11-27 09:31:45', '2020-11-27 09:31:47'),
('2020-11-02', '57', '96', '2020-11-27 09:28:45', '2020-11-27 09:28:46'),
('2020-11-03', '36', '23', '2020-11-27 09:26:48', '2020-11-27 09:26:49'),
('2020-11-04', '56', '86', '2020-11-27 09:25:54', '2020-11-27 09:25:56'),
('2020-11-05', '92', '83', '2020-11-27 09:24:45', '2020-11-27 09:24:47'),
('2020-11-06', '79', '38', '2020-11-27 09:23:45', '2020-11-27 09:23:47'),
('2020-11-07', '84', '60', '2020-11-27 09:22:46', '2020-11-27 09:22:49'),
('2020-11-09', '23', '64', '2020-11-27 09:21:44', '2020-11-27 09:21:46'),
('2020-11-10', '03', '28', '2020-11-27 09:20:45', '2020-11-27 09:20:47'),
('2020-11-11', '95', '26', '2020-11-27 09:19:39', '2020-11-27 09:19:41'),
('2020-11-12', '09', '10', '2020-11-27 09:14:51', '2020-11-27 09:14:52'),
('2020-11-13', '05', '88', '2020-11-27 09:13:50', '2020-11-27 09:13:51'),
('2020-11-14', '87', '48', '2020-11-27 09:11:44', '2020-11-27 09:11:45'),
('2020-11-16', '68', '54', '2020-11-27 09:10:28', '2020-11-27 09:10:30'),
('2020-11-17', '61', '81', '2020-11-27 09:08:14', '2020-11-27 09:08:16'),
('2020-11-18', '47', '38', '2020-11-27 09:07:15', '2020-11-27 09:07:17'),
('2020-11-19', '74', '56', '2020-11-27 09:06:14', '2020-11-27 09:06:17'),
('2020-11-20', '83', '65', '2020-11-27 09:03:16', '2020-11-27 09:03:20'),
('2020-11-21', '19', '71', NULL, NULL),
('2020-11-23', '61', '43', NULL, NULL),
('2020-11-24', '38', '63', NULL, NULL),
('2020-11-25', '71', '78', NULL, NULL),
('2020-11-26', '03', '54', '2020-11-21 13:50:00', '2020-11-18 11:12:53'),
('2020-11-27', 'xx', 'xx', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shillong_results`
--

CREATE TABLE `shillong_results` (
  `Date` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `F_R` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `S_R` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'xx',
  `FR_P_Time` timestamp NULL DEFAULT NULL,
  `SR_P_Time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shillong_results`
--

INSERT INTO `shillong_results` (`Date`, `F_R`, `S_R`, `FR_P_Time`, `SR_P_Time`) VALUES
('2020-10-24', '66', '90', '2020-11-27 09:37:56', '2020-11-27 09:37:58'),
('2020-10-26', '25', '80', '2020-11-27 09:36:57', '2020-11-27 09:36:58'),
('2020-10-27', '62', '95', '2020-11-27 09:36:05', '2020-11-27 09:36:07'),
('2020-10-28', '31', '75', '2020-11-27 09:35:10', '2020-11-27 09:35:12'),
('2020-10-29', '92', '15', '2020-11-27 09:34:06', '2020-11-27 09:34:08'),
('2020-10-30', '94', '35', '2020-11-27 09:33:02', '2020-11-27 09:33:04'),
('2020-10-31', '86', '07', '2020-11-27 09:32:11', '2020-11-27 09:32:12'),
('2020-11-02', '11', '21', '2020-11-27 09:28:58', '2020-11-27 09:29:00'),
('2020-11-03', '34', '94', '2020-11-27 09:27:14', '2020-11-27 09:27:17'),
('2020-11-04', '50', '99', '2020-11-27 09:26:07', '2020-11-27 09:26:08'),
('2020-11-05', '23', '35', '2020-11-27 09:25:10', '2020-11-27 09:25:12'),
('2020-11-06', '28', '06', '2020-11-27 09:24:02', '2020-11-27 09:24:06'),
('2020-11-07', '10', '60', '2020-11-27 09:23:02', '2020-11-27 09:23:04'),
('2020-11-09', '79', '94', '2020-11-27 09:21:59', '2020-11-27 09:22:02'),
('2020-11-10', '26', '22', '2020-11-27 09:21:07', '2020-11-27 09:21:08'),
('2020-11-11', '63', '57', '2020-11-27 09:20:01', '2020-11-27 09:20:04'),
('2020-11-12', '60', '75', '2020-11-27 09:15:12', '2020-11-27 09:15:13'),
('2020-11-13', '03', '54', '2020-11-27 09:14:07', '2020-11-27 09:14:09'),
('2020-11-14', '36', '80', '2020-11-27 09:11:59', '2020-11-27 09:12:01'),
('2020-11-16', '68', '47', '2020-11-27 09:10:48', '2020-11-27 09:10:49'),
('2020-11-17', '26', '08', '2020-11-27 09:08:31', '2020-11-27 09:08:33'),
('2020-11-18', '06', '82', '2020-11-27 09:07:29', '2020-11-27 09:07:31'),
('2020-11-19', '99', '68', '2020-11-27 09:06:33', '2020-11-27 09:06:36'),
('2020-11-20', '16', '94', '2020-11-27 09:03:45', '2020-11-27 09:03:50'),
('2020-11-21', '35', '87', NULL, NULL),
('2020-11-23', 'Off', 'Off', NULL, NULL),
('2020-11-24', '44', '52', NULL, NULL),
('2020-11-25', 'Off', 'Off', NULL, NULL),
('2020-11-26', '34', '80', '2020-11-21 13:50:00', '2020-11-18 11:12:53'),
('2020-11-27', 'xx', 'xx', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `juwai_results`
--
ALTER TABLE `juwai_results`
  ADD PRIMARY KEY (`Date`);

--
-- Indexes for table `khanapara_results`
--
ALTER TABLE `khanapara_results`
  ADD PRIMARY KEY (`Date`);

--
-- Indexes for table `shillong_results`
--
ALTER TABLE `shillong_results`
  ADD PRIMARY KEY (`Date`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
