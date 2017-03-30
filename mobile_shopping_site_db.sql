-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2016 at 08:53 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mobile_shopping_site_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `mobile_no` varchar(200) DEFAULT NULL,
  `email_id` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `Registered_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `mobile_no`, `email_id`, `username`, `password`, `Registered_date`) VALUES
(6, 'ram', 'kotashowr', '555', 'ram@outlook.com', 'ram', 'ram@123', '2016-10-16 20:54:48'),
(7, 'shreejwal', 'kotashowr', '9843227975', 'shreejwalgiri@gmail.com', 'sg', 'sh@123', '2016-10-16 20:57:20'),
(8, 'admin', 'admin', '555', 'admin@gmail', 'admin', 'admin', '2016-10-16 20:57:54');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(200) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product` varchar(200) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `purchaged_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `user_name`, `product_id`, `product`, `price`, `purchaged_date`) VALUES
(7, 22, 'shreejwal', 27, 'IPhone', 90000, '2016-10-17 10:49:23'),
(8, 24, 'rama', 27, 'IPhone', 90000, '2016-10-17 11:37:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `product_data` datetime DEFAULT CURRENT_TIMESTAMP,
  `product_name` varchar(200) DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `product_brand` varchar(200) DEFAULT NULL,
  `product_detail` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_data`, `product_name`, `product_price`, `product_brand`, `product_detail`, `image`) VALUES
(27, '2016-10-17 10:32:30', 'IPhone', 90000, '7 +', 'this is iphone', '580457e289fc31.87439270.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brannd`
--

CREATE TABLE IF NOT EXISTS `tbl_brannd` (
`brand_id` int(11) NOT NULL,
  `brand_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
`product_id` int(11) NOT NULL,
  `product_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `product_name` varchar(200) DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `product_brand` varchar(200) DEFAULT NULL,
  `product_description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_date`, `product_name`, `product_price`, `product_brand`, `product_description`) VALUES
(1, '2016-09-21 08:16:09', 'j7 series', 1500, 'samsung', 'mobile is the mobile');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
`id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email_id` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `name`, `email_id`, `password`, `created_date`) VALUES
(22, 'shreejwal', 'shreejwalgiri@gmail.com', 'shreejwal', '2016-10-05 10:39:10'),
(24, 'rama', 'ram@outlook.com', 'ram123', '2016-10-15 11:53:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `product_name` (`product_name`);

--
-- Indexes for table `tbl_brannd`
--
ALTER TABLE `tbl_brannd`
 ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_brannd`
--
ALTER TABLE `tbl_brannd`
MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
