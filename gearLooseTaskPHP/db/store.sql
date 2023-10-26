-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 10:30 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `image`) VALUES
(1, 'Canon EOS', 24999, 'cam1.jpg'),
(2, 'Nikon DSLR', 39999, 'cam2.jpg'),
(3, 'Sony DSLR', 49999, 'cam3.jpg'),
(4, 'Olympus DSLR', 79999, 'cam4.jpg'),
(5, 'Titan Model #301', 1299, 'watch1.jpg'),
(6, 'Titan Model #201', 2999, 'watch2.jpg'),
(7, 'HMT Milan', 7999, 'watch3.jpg'),
(8, 'Faber Luba', 17999, 'watch4.jpg'),
(9, 'H & W', 599, 'shirt1.jpg'),
(10, 'Luis Phil', 999, 'shirt2.jpg'),
(11, 'John Zok', 1499, 'shirt3.jpg'),
(12, 'Jhalsani', 1299, 'shirt4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `contact` varchar(255) CHARACTER SET latin1 NOT NULL,
  `city` varchar(255) CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Anmol Sharma', 'anmolksharma2003@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '9771729061', 'Gangtok', 'Arithang'),
(13, 'Nikhil Kumar', 'nikhil@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '9876543210', 'Gangtok', 'Arithang'),
(15, 'Pranshu Jaiswal', 'pranshu@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '9876543212', 'Ravangla', 'NIT Sikkim'),
(16, 'Gaurav Singh', 'gaurav@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '9876543200', 'Varanasi', 'Near IIT BHU'),
(19, 'Anmol Singh', 'abc@gmail.com', '92251e8665e19be62c86ff039528e16e', '9876543215', 'Gangtok', 'NIT Sikkim'),
(21, 'Anmol Sharma', 'anmol@gmail.com', '25d55ad283aa400af464c76d713c07ad', '9874563210', 'Gangtok', 'Gantgok');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80012;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
