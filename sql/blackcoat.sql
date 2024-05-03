-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 06:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blackcoat`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `productid` int(11) NOT NULL,
  `cartuser` varchar(70) NOT NULL,
  `productname` varchar(70) NOT NULL,
  `productprice` int(10) NOT NULL,
  `productimg` varchar(70) NOT NULL,
  `quantity` int(100) NOT NULL,
  `productsize` varchar(10) NOT NULL,
  `productcolor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`productid`, `cartuser`, `productname`, `productprice`, `productimg`, `quantity`, `productsize`, `productcolor`) VALUES
(1, 'zadooobet3@gmail.com', 'men black jacket', 230, 'product-03.jpg', 2, 'Size XS', 'Yellow'),
(2, 'zadooobet3@gmail.com', 'white shirt', 105, 'product-01.jpg', 4, 'Size S', 'White'),
(1, 'zeiad1@gmail.com', 'men black jacket', 230, 'product-03.jpg', 2, 'Size M', 'Black'),
(2, 'zeiad1@gmail.com', 'white shirt', 105, 'product-01.jpg', 2, 'Size L', 'Black');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `email`, `message`) VALUES
(5, 'zadooobet4@gmail.com', 'zeiad ahmed'),
(6, 'zadooobet3@gmail.com', 'zzzzzzzzzzzzzzzzzzzzzzz'),
(7, 'zadooobet4@gmail.com', 'sdfghjkl;lkjhgfdsdfghjkl;l'),
(8, 'ammarahmed34@hotmail.com', 'helooooooooo'),
(9, 'ammarahmed34@hotmail.com', 'helllllllllooooo'),
(10, 'carlottagaglioti@icloud.com', 'zzzzzzzzzzzzzzz');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `paymentid` int(20) NOT NULL,
  `useremail` varchar(70) NOT NULL,
  `country` varchar(70) NOT NULL,
  `state` varchar(70) NOT NULL,
  `postalcode` varchar(50) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`paymentid`, `useremail`, `country`, `state`, `postalcode`, `total`) VALUES
(3, 'zadooobet3@gmail.com', 'egypt', 'cairo', '155', 880),
(4, 'zadooobet3@gmail.com', 'egypt', 'cairo', '0155', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `price` int(20) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `details` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image1`, `image2`, `image3`, `details`, `category`) VALUES
(1, 'men black jacket', 230, 'product-03.jpg', 'product-03.jpg', 'product-03.jpg', 'men black jacket', 'men'),
(2, 'white shirt', 105, 'product-01.jpg', 'product-02.jpg', 'slide-01.jpg', 'white shirt', 'women');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `userrule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `userrule`) VALUES
(1, 'Zeiad', 'Ahmed', '01553017722', 'zadooobet4@gmail.com', 'zadooredA121@', 'admin'),
(2, 'Zeiad', 'Ahmed', '01553017722', 'zadooobet3@gmail.com', 'zadooredA121@', 'user'),
(3, 'Zeiad', 'Abdeltawab', '01553017722', 'zeiad1@gmail.com', 'zadooredA11@', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
