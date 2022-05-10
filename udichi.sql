-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 05:19 PM
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
-- Database: `udichi`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `status_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `cell`, `location`, `gender`, `photo`, `username`, `password`, `status`, `trash`, `status_at`, `updated_at`) VALUES
(15, 'Majadul Islam Pallab', 'pallab@gmail.com', '01713564842', 'monohardi', 'male', 'Pallab.PNG', 'pallabme', '123', 1, 0, '2022-03-23 17:15:11', NULL),
(16, 'Rahemul Islam Showrav', 'biplob@gmail.com', '01643112342', 'shibpur', 'male', '245165379_393392342377490_7525848470403508792_n.jpg', 'rmbiplob', '8r64dvk257', 1, 0, '2022-03-23 17:17:06', NULL),
(17, 'Suman Robi Dash', 'sumon@gmail.com', '01827343452', 'shibpur', 'male', '164356871_497464234617705_2824674552581000793_n.jpg', 'sumon21', '8r64dvk257', 1, 0, '2022-03-23 17:18:09', NULL),
(19, 'Rahemul Islam Showrav', 'showrav@gmail.com', '01892493619', 'monohardi', 'male', 'IMG_0077.JPG', 'rishowrav', 'kdHZ3dqzuH', 1, 0, '2022-03-27 09:29:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `qualifications` varchar(100) NOT NULL,
  `parmanent_address` varchar(250) NOT NULL,
  `present_address` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `subject`, `qualifications`, `parmanent_address`, `present_address`, `phone`, `email`, `password`, `photo`, `status`, `trash`, `updated_at`, `created_at`) VALUES
(0, 'Majadul Islam Pallab', 'english', 'Bsc in cse', '1650 Monohardi, Narshingdi, ', '1650 Monohardi, Narshingdi, ', '01928383723', 'pallab@gmail.com', 'FM2NAxKBQq', '', 1, 0, NULL, '2022-04-11 02:13:12'),
(0, 'Rashedul Mahfuz Biplob', 'math', 'Bsc in cse', 'asdfasdf', 'asdfasf', 'asdfasf', 'kanchan@gmail.com', 'FM2NAxKBQq', '', 1, 0, NULL, '2022-04-11 02:24:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
