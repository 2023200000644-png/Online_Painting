-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2026 at 03:09 PM
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
-- Database: `online_painting`
--

-- --------------------------------------------------------

--
-- Table structure for table `paintings`
--

CREATE TABLE `paintings` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `contact_info` varchar(150) DEFAULT NULL,
  `category` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(30) DEFAULT 'Available',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paintings`
--

INSERT INTO `paintings` (`id`, `title`, `artist`, `contact_info`, `category`, `price`, `image`, `status`, `created_at`) VALUES
(2, 'Flowers', 'Fariya', 'fariyasmrity324@gmail.com', 'Nature', 1000.00, '1790597149_6aba581d9be3e.jpeg', 'Available', '2026-09-28 12:05:49'),
(3, 'sketch', 'Farhana', 'Farhana100akter@gmail.com', 'Portrait', 500.00, '1790597721_6aba5a59d88b0.jpeg', 'Available', '2026-09-28 12:15:21'),
(4, 'Sea beach  🌊', 'Farhana', 'Farhana\'s thoughts - Facebook', 'Nature', 600.00, '1790598096_6aba5bd0070f8.jpeg', 'Available', '2026-09-28 12:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `student_id` varchar(30) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `student_id`, `email`, `password`, `created_at`) VALUES
(1, 'Farhana Akter', '2023200000001', '2023200000644@seu.edu.bd', '$2y$10$tzaqxWB2QLnctzD3nXbh6.Ka/gj./S4sncgaHpYCTPOzcwgSU/uqq', '2026-09-28 07:31:37'),
(2, 'fariya', '2023200000002', 'fariyasmrity324@gmail.com', '$2y$10$kHoMJOY1MC/9GyX//qd2qOwz9HC.y8T.u8J6bY9U2kqKhCDpX/Iq.', '2026-09-28 11:59:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paintings`
--
ALTER TABLE `paintings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paintings`
--
ALTER TABLE `paintings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
