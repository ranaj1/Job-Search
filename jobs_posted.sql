-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 04:20 PM
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
-- Table structure for table `jobs_posted`
--

CREATE TABLE `jobs_posted` (
  `job_id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `job_emp` varchar(100) NOT NULL,
  `job_category` varchar(100) NOT NULL,
  `job_salary` varchar(100) NOT NULL,
  `job_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs_posted`
--

INSERT INTO `jobs_posted` (`job_id`, `emp_name`, `job_emp`, `job_category`, `job_salary`, `job_location`) VALUES
(3, 'Noida Textile', 'riya', 'Textile Worker', 'Rs. 15,000/month', 'Noida'),
(4, 'Gurgaon Construction', 'shriya', 'Construction Worker', 'Rs 30,000/month', 'Gurgaon'),
(13, 'Noida Construction', 'riya', 'Construction Worker', 'Rs 20,000/month', 'Noida'),
(14, 'Noida Delivery', 'riya', 'Delivery', 'Rs. 15,000/month', 'Noida'),
(15, 'Noida Plumbers', 'riya', 'Plumber', 'Rs. 10,000/month', 'Noida'),
(16, 'Delhi Textile', 'john', 'Textile Worker', 'Rs. 15,000/month', 'Delhi'),
(17, 'Delhi Chef', 'john', 'Chef Jobs', 'Rs. 10,000/month', 'Delhi'),
(20, 'Delhi Delivery', 'john', 'Delivery', 'Rs. 15,000/month', 'Delhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs_posted`
--
ALTER TABLE `jobs_posted`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs_posted`
--
ALTER TABLE `jobs_posted`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
