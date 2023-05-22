-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 05:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kish`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `username`, `message`, `timestamp`) VALUES
(50, 'kish', 'sdsadasd', '2023-05-21 08:31:16'),
(51, 'Briangikandi', 'Yes', '2023-05-21 08:31:43'),
(52, 'briangikandi', 'sdasdasd', '2023-05-21 08:31:53'),
(53, 'Yooh', 'Trade', '2023-05-21 08:33:35'),
(54, '', 'sadffasdf', '2023-05-21 08:35:28'),
(55, '', 'nigaa', '2023-05-21 08:37:35'),
(56, '', 'fdfdsdfdsa', '2023-05-21 08:37:40'),
(57, '', 'sadsadasd', '2023-05-21 08:37:59'),
(58, '', 'svfgsdfs', '2023-05-21 08:38:11'),
(59, '', 'sadasdsad', '2023-05-21 08:38:30'),
(60, '', 'dadsdsa', '2023-05-21 08:38:33'),
(61, '', 'efdjdkfskfkjldsfkdsfksd', '2023-05-21 08:38:43'),
(62, 'adsda', 'sadasda', '2023-05-21 08:39:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
