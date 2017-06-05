-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2017 at 06:58 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rajdhaniflorist`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `bid` int(255) NOT NULL,
  `banner_images` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`bid`, `banner_images`) VALUES
(3, 'a:2:{i:0;s:14:"banner-002.jpg";i:1;s:14:"banner-005.jpg";}');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cid` int(255) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `category`) VALUES
(1, 'category 1'),
(2, 'c2'),
(3, 'c1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(50) NOT NULL,
  `sid` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `image_gallery` varchar(2000) NOT NULL,
  `actual_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `short_description` varchar(2000) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `addoption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `sid`, `name`, `image`, `image_gallery`, `actual_price`, `price`, `short_description`, `description`, `addoption`) VALUES
(5, '8', 'new ', '9.jpg', '', '10', '8', '', 'This is editted product for testing ..', 'best_selling'),
(7, '6', 'p1', '6.jpg', '', '100', '90', '', 'whwhvxv', 'best_selling'),
(8, '6', 'p2', '10.jpg', '', '100', '60', '', 'ftxtxtx', 'best_selling'),
(9, '3', 'product carnation', '10.jpg', '', '100', '80', 'editted short description', 'product complete description', 'best_selling'),
(11, '6', '3.jpg', '9.jpg', 'a:3:{i:0;s:5:"1.jpg";i:1;s:5:"2.jpg";i:2;s:5:"3.jpg";}', '100', '80', 'short', 'full', 'best_selling'),
(13, '6', 'poduct5', '10.jpg', 'a:4:{i:0;s:5:"8.jpg";i:1;s:5:"9.jpg";i:2;s:6:"10.jpg";i:3;s:6:"11.jpg";}', '10', '8', 'short description', 'full descritpion', 'best_selling');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `rid` int(255) NOT NULL,
  `pid` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `comment` varchar(2000) NOT NULL,
  `datetime` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`rid`, `pid`, `name`, `email`, `rating`, `comment`, `datetime`) VALUES
(6, '9', 'test', 'test@gmail.com', '4', 'good', '2017-04-12 12:00:29'),
(11, '9', 'test', 'test@gmail.com', '4', 'good', '2017-04-12 12:09:01'),
(12, '9', 'test', 'test@gmail.com', '4', 'good', '2017-04-12 12:11:14'),
(18, '9', 'sanjeev', 'sanjeev@gmail.com', '5', 'best', '2017-04-12 12:37:29'),
(19, '9', 'sanjeev', 'sanjeev@gmail.com', '5', 'best', '2017-04-12 12:37:40'),
(20, '9', 'sanjeev', 'sanjeev@gmail.com', '5', 'best', '2017-04-12 12:38:28'),
(21, '9', 'sanjeev', '', '5', 'best', '2017-04-12 12:40:55'),
(22, '8', 'test', 'test@gmail.com', '5', 'Good', '2017-04-12 18:19:03'),
(23, '13', 'test', 'test@gmail.com', '4', 'good', '2017-04-12 18:25:16'),
(24, '13', 'Test', 'test@email.com', '3', 'Best', '2017-04-12 18:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(255) NOT NULL,
  `slide_images` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `slide_images`) VALUES
(2, 'a:2:{i:0;s:9:"Asics.jpg";i:1;s:11:"Babolat.jpg";}');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `sid` int(255) NOT NULL,
  `cid` varchar(10) NOT NULL,
  `subcategory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`sid`, `cid`, `subcategory`) VALUES
(1, '1', 'Veriety'),
(2, 'c1', 'Rose'),
(3, '2', 'Carnation'),
(4, 'c1', 'Gerbera'),
(5, '1', 'Taste'),
(6, '3', 's1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `bid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `rid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `sid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
