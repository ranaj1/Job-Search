-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 04:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs_applied`
--

CREATE TABLE `jobs_applied` (
  `user_name` varchar(100) NOT NULL,
  `employer` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs_applied`
--

INSERT INTO `jobs_applied` (`user_name`, `employer`, `category`, `salary`, `location`, `user_id`) VALUES
('ranaj', 'Noida Construction', ' Construction Worker', 'Rs 20,000/month', 'Noida', 7),
('manya', 'Gurgaon Construction', ' Construction Worker', 'Rs 30,000/month', 'Gurgaon', 17),
('tina', 'Delhi Construction', ' Construction Worker', 'Rs 30,000/month', 'Delhi', 24),
('ranaj', 'Delhi Construction', ' Construction Worker', 'Rs 30,000/month', 'Delhi', 33),
('ranaj', 'Noida Construction', ' Construction Worker', 'Rs 20,000/month', 'Noida', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs_applied`
--
ALTER TABLE `jobs_applied`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs_applied`
--
ALTER TABLE `jobs_applied`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
