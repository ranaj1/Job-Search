-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2021 at 03:03 AM
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
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_email` varchar(100) NOT NULL,
  `emp_mobile_no` varchar(13) NOT NULL,
  `emp_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`emp_id`, `emp_name`, `emp_email`, `emp_mobile_no`, `emp_password`) VALUES
(1, 'riya', 'riya@gmail.com', '34675', 'riya'),
(2, 'john', 'john@gmail.com', '32567', 'john'),
(3, 'shriya', 'shriya@gmail.com', '3468', 'shriya');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile_no` varchar(13) NOT NULL,
  `password` varchar(100) NOT NULL,
  `forgot_password_code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `mobile_no`, `password`, `forgot_password_code`) VALUES
(1, 'ranaj', 'rana.10aayushi@gmail.com', '8708338592', 'aayushi10', 'null'),
(2, 'teju', 'tejasvirana0@gmail.com', '8708338592', 'tejasvi', ''),
(7, 'manya', 'manya@gmail.com', '33234', 'manya', ''),
(8, 'tina', 'tina@gmail.com', '235478', 'tina', ''),
(9, 'seema', 'seema@gmail.com', '45689', 'seema', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `jobs_applied`
--
ALTER TABLE `jobs_applied`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `jobs_posted`
--
ALTER TABLE `jobs_posted`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs_applied`
--
ALTER TABLE `jobs_applied`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `jobs_posted`
--
ALTER TABLE `jobs_posted`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
