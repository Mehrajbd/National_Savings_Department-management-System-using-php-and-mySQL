-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 04:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathers_name` varchar(255) NOT NULL,
  `mothers_name_spouse_name` varchar(255) NOT NULL,
  `nominee_name` varchar(255) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `issue_date` date NOT NULL,
  `address` text NOT NULL,
  `scheme` varchar(50) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fathers_name`, `mothers_name_spouse_name`, `nominee_name`, `phone_no`, `email`, `password`, `nid`, `gender`, `issue_date`, `address`, `scheme`, `sector`, `photo`, `created_at`) VALUES
(5, 'Mehraj', 'Fazlur Rashid', 'Nurnahar Begum', 'Nur nahar Begum', '01960690615', 'mehraj.cse36@gmail.com', '12345', '123654', 'male', '2024-06-06', '4213 Chattogram ,Oxygen,', '3 year', 'Bangladesh Bank', 'uploads/wallpaperflare.com_wallpaper.jpg', '2024-06-06 14:41:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
