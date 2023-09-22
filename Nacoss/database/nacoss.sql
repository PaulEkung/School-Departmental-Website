-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 04:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nacoss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `hnd1`
--

CREATE TABLE `hnd1` (
  `id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `credit_load` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hnd1`
--

INSERT INTO `hnd1` (`id`, `course_code`, `course_title`, `credit_load`) VALUES
(1, 'COM 311', 'Unified Modeling Language', '3'),
(2, 'COM 312', 'MADLAB', '4');

-- --------------------------------------------------------

--
-- Table structure for table `hnd2`
--

CREATE TABLE `hnd2` (
  `id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `credit_load` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hnd2`
--

INSERT INTO `hnd2` (`id`, `course_code`, `course_title`, `credit_load`) VALUES
(1, 'COM 411', 'Programming using JAVA IV', '6'),
(2, 'COM 412', 'Python programming II', '4');

-- --------------------------------------------------------

--
-- Table structure for table `nacossusers`
--

CREATE TABLE `nacossusers` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nacossusers`
--

INSERT INTO `nacossusers` (`id`, `unique_id`, `name`, `email`, `password`, `date`) VALUES
(2, '3730', 'Paul Ekung', 'pauldrums32@gmail.com', '$2y$10$VAiHpqjW9C77dYxeM3Nyxu/8OYp.dca5Xypj2ExKdQ1o3RfM7Tgaq', '2022-12-05 22:41:42'),
(3, '3837', 'Nikki Smart', 'etajamesodey@gmail.com', '$2y$10$1brwZf6G4DkJF8zalbIh0uFSU5U8roVoKnwvc92bsBkYjiSfqUE7K', '2023-01-14 21:51:02'),
(6, '393030', 'Amap Sunday', 'amapsunday@gmail.com', '$2y$10$QJwhu6uwxlNCowccJrv5MOJ1Dvo4jARFbWHwHFwEyoh29C0KCYBPC', '2023-01-14 23:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `nd1`
--

CREATE TABLE `nd1` (
  `id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_title` text NOT NULL,
  `credit_load` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nd1`
--

INSERT INTO `nd1` (`id`, `course_code`, `course_title`, `credit_load`) VALUES
(3, 'COM 112', 'Introduction to digital electronics', '4'),
(4, 'COM 112', 'Introduction to digital electronics', '4');

-- --------------------------------------------------------

--
-- Table structure for table `nd2`
--

CREATE TABLE `nd2` (
  `id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `credit_load` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nd2`
--

INSERT INTO `nd2` (`id`, `course_code`, `course_title`, `credit_load`) VALUES
(1, 'COM 216', 'Statistics in computing II', '4'),
(2, 'COM 213', 'Introduction to UML', '4');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `rank` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `rank`, `image`, `date`) VALUES
(1, 'M.A Malachi', 'H.O.D', 'M.A Malachi63cda7dd0ab913.04320116.jpg', '2023-01-22 21:17:17'),
(2, 'Goodluck Emereonye', 'Senior Staff', 'Goodluck Emereonye63cda864b346e4.11333665.jpg', '2023-01-22 21:19:32'),
(3, 'Chris Mike', 'Senior Staff', 'Chris Mike63cda8982c54b5.23818143.jpg', '2023-01-22 21:20:24'),
(4, 'Beberick Awu', 'Chief Lecturer', 'Beberick Awu63cda8c3aeffa3.62816480.jpg', '2023-01-22 21:21:07'),
(5, 'Clement Kings', 'Chief Lecturer', 'Clement Kings63cda90f019df5.16961168.jpg', '2023-01-22 21:22:23'),
(6, 'Hillary Abdul', 'Assistant HOD', 'Hillary Abdul63cda94bc40b05.11500678.jpg', '2023-01-22 21:23:23'),
(7, 'Benard Harry', 'Senior Staff', 'Benard Harry63cda962d4c433.65874171.jpg', '2023-01-22 21:23:46'),
(8, 'Luiz Pascal', 'Nacoss President', 'Luiz Pascal63cda98b18df24.79304539.jpg', '2023-01-22 21:24:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hnd1`
--
ALTER TABLE `hnd1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hnd2`
--
ALTER TABLE `hnd2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nacossusers`
--
ALTER TABLE `nacossusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nd1`
--
ALTER TABLE `nd1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nd2`
--
ALTER TABLE `nd2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
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
-- AUTO_INCREMENT for table `hnd1`
--
ALTER TABLE `hnd1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hnd2`
--
ALTER TABLE `hnd2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nacossusers`
--
ALTER TABLE `nacossusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nd1`
--
ALTER TABLE `nd1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nd2`
--
ALTER TABLE `nd2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
