-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2024 at 07:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(12) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `hobbies` varchar(500) NOT NULL,
  `languages` varchar(599) NOT NULL,
  `address` varchar(599) NOT NULL,
  `school` varchar(599) NOT NULL,
  `stream` varchar(599) NOT NULL,
  `12thdob` date NOT NULL,
  `skill` varchar(599) NOT NULL,
  `experience` varchar(599) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `email`, `number`, `dob`, `gender`, `religion`, `nationality`, `status`, `hobbies`, `languages`, `address`, `school`, `stream`, `12thdob`, `skill`, `experience`) VALUES
(1, 'Sushant koon', 'Hanu@gamil.com', '7018584903', '2024-08-13', 'Male', 'Hindu', 'Indian', 'Married', 'eqw', '32', 'e', '23e23e2e23', 'Arts', '2024-08-07', ' Basic Knowledge in Computer & Internet', 'iuebfhiuwebfwef'),
(5, 'Robort', 'r@gamil.com', '8894073220', '2024-08-13', 'Male', 'Sikh', 'Non Indian', 'Single', 'Car lover', 'Hindi & English', 'Pin-177208 , Guglehar,Dis-Una Himachal Pardash', 'ser.sec.Guglehar', 'Cumers', '2010-06-17', 'javascript developer Fast larner,', 'Dominos,New Delhi (October 2020 - Currently Pursuing)  Handling customers and fulfilling their needs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `user_type` varchar(31) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(6, 'Hanu', 'Hanu@gamil.com', '123', 'user'),
(8, 'Sushant', 'sushantkoon@gmail.com', '1', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
