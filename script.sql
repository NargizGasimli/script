-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 07:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `script`
--

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `name` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`) VALUES
(1, 'Web developer'),
(2, 'Project manager'),
(3, 'Ceo'),
(4, 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(244) NOT NULL,
  `surname` varchar(244) NOT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(244) NOT NULL,
  `login` varchar(244) NOT NULL,
  `password` varchar(244) NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT 1,
  `position_id` int(11) NOT NULL,
  `salary` float NOT NULL,
  `blocked` tinyint(4) NOT NULL DEFAULT 1,
  `deleted` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `age`, `email`, `login`, `password`, `admin`, `position_id`, `salary`, `blocked`, `deleted`) VALUES
(1, 'Nargiz', 'Gasimli', 25, 'nargis.gasimli@gmail.com', 'admin', '$2y$10$63izuyhdVKm7xxnw/0gQ2epKgdwe9ROFvQXHNyoulgV7NrlkxepK2', 1, 1, 1000, 1, 1),
(2, 'test', 'Test', 20, 'test@gmail.com', 'test', '123456', 1, 2, 2000, 1, 1),
(4, 'test1', 'test1', 32, 'nargis.gasimli@gmail.com', 'nargis.gasimli@gmail.com1', '$2y$10$pkdEb5gjL28/sG7euQuaKujcGFTG3n8bqGhCzbjL3bDHqLI8wYYvm', 1, 3, 200, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
