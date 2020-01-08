-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2020 at 02:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshci`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(5) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`) VALUES
(1, 'Samsung Galaxy s1', 170, 'Samsung Galaxy s1 nice mobile have a good features.'),
(2, 'Samsung Galaxy s2', 180, 'Samsung Galaxy s2 nice mobile have a good features.'),
(3, 'Samsung Galaxy s3', 190, 'Samsung Galaxy s3 nice mobile have a good features.'),
(4, 'Samsung Galaxy s4', 200, 'Samsung Galaxy s4 nice mobile have a good features.'),
(5, 'Samsung Galaxy s5', 210, 'Samsung Galaxy s5 nice mobile have a good features.'),
(6, 'Samsung Galaxy s6', 220, 'Samsung Galaxy s6 nice mobile have a good features.'),
(7, 'Samsung Galaxy s7', 230, 'Samsung Galaxy s7 nice mobile have a good features.'),
(8, 'Samsung Galaxy s8', 250, 'Samsung Galaxy s8 nice mobile have a good features.'),
(9, 'Samsung Galaxy s9', 300, 'Samsung Galaxy s9 nice mobile have a good features.'),
(10, 'Samsung Galaxy s10', 320, 'Samsung Galaxy s10 nice mobile have a good features.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
