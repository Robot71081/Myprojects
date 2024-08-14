-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 12, 2024 at 12:40 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `feedback` varchar(200) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`uid`, `username`, `email`, `feedback`) VALUES
(1, 'rttrur', ' rytyrtyrt', 'rtyrrtyrtytr'),
(2, 'dfgdf', ' reter', 'sddtsd');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` int(10) NOT NULL,
  `totalprice` varchar(100) NOT NULL,
  `orderstatus` varchar(100) NOT NULL,
  `paymentmode` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userid`, `totalprice`, `orderstatus`, `paymentmode`, `timestamp`) VALUES
(4, 1, '92000', 'Dispatched', 'false', '2024-07-23 00:43:01'),
(5, 1, '80000', 'orderplaced', 'false', '2024-07-23 22:40:34'),
(6, 1, '150000', 'orderplaced', 'false', '2024-07-23 22:41:22'),
(7, 1, '40000', 'orderplaced', 'false', '2024-07-23 23:15:06'),
(8, 1, '12000', 'Inprogress', 'false', '2024-07-23 23:37:46'),
(9, 2, '40000', 'orderplaced', 'false', '2024-07-23 23:40:29'),
(10, 2, '12000', 'orderplaced', 'false', '2024-07-23 23:41:25'),
(11, 1, '120000', 'cancelled', 'false', '2024-07-26 23:59:18'),
(12, 1, '40000', 'orderplaced', 'false', '2024-07-29 23:10:28'),
(13, 1, '12000', 'orderplaced', 'false', '2024-07-29 23:12:20'),
(14, 1, '40000', 'orderplaced', 'false', '2024-08-02 23:48:52'),
(15, 1, '600', 'orderplaced', 'Cash On Delivery', '2024-08-05 22:38:09'),
(16, 1, '799', 'cancelled', 'Cash On Delivery', '2024-08-05 23:11:11'),
(17, 1, '7191', 'orderplaced', 'Cash On Delivery', '2024-08-05 23:32:53'),
(18, 1, '999', 'orderplaced', 'Cash On Delivery', '2024-08-05 23:41:18'),
(19, 1, '600', 'orderplaced', 'Cash On Delivery', '2024-08-05 23:56:05'),
(20, 1, '1497', 'orderplaced', 'Cash On Delivery', '2024-08-06 00:02:08'),
(21, 1, '1200', 'orderplaced', 'Cash On Delivery', '2024-08-06 00:26:17'),
(22, 1, '1200', 'orderplaced', 'Cash On Delivery', '2024-08-06 00:27:14'),
(23, 1, '998', 'orderplaced', 'Cash On Delivery', '2024-08-06 00:34:51'),
(24, 1, '999', 'orderplaced', 'Cash On Delivery', '2024-08-06 00:36:32'),
(25, 1, '799', 'orderplaced', 'Cash On Delivery', '2024-08-06 00:38:00'),
(26, 1, '799', 'orderplaced', 'COD', '2024-08-06 22:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `ordersitem`
--

DROP TABLE IF EXISTS `ordersitem`;
CREATE TABLE IF NOT EXISTS `ordersitem` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `orderid` int(10) NOT NULL,
  `productid` int(10) NOT NULL,
  `product_qty` int(10) NOT NULL,
  `productprice` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordersitem`
--

INSERT INTO `ordersitem` (`id`, `orderid`, `productid`, `product_qty`, `productprice`) VALUES
(8, 3, 9, 3, 12000),
(9, 4, 9, 1, 12000),
(10, 4, 8, 2, 40000),
(11, 5, 8, 2, 40000),
(12, 6, 7, 3, 50000),
(13, 7, 8, 1, 40000),
(14, 8, 9, 1, 12000),
(15, 9, 8, 1, 40000),
(16, 10, 9, 1, 12000),
(17, 11, 8, 3, 40000),
(18, 12, 8, 1, 40000),
(19, 13, 9, 1, 12000),
(20, 14, 8, 1, 40000),
(21, 15, 5, 1, 600),
(22, 16, 6, 1, 799),
(23, 17, 6, 9, 799),
(24, 18, 7, 1, 999),
(25, 19, 5, 1, 600),
(26, 20, 8, 3, 499),
(27, 22, 5, 2, 600),
(28, 23, 8, 2, 499),
(29, 24, 23, 1, 999),
(30, 25, 22, 1, 799),
(31, 26, 18, 1, 799);

-- --------------------------------------------------------

--
-- Table structure for table `ordertrack`
--

DROP TABLE IF EXISTS `ordertrack`;
CREATE TABLE IF NOT EXISTS `ordertrack` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `orderid` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertrack`
--

INSERT INTO `ordertrack` (`id`, `orderid`, `status`, `reason`, `timestamp`) VALUES
(2, 8, 'Cancelled', 'ghfghfg', '2024-07-24 00:13:54'),
(3, 8, 'Cancelled', 'ghfghfg', '2024-07-24 00:15:16'),
(4, 8, 'Cancelled', 'ddfhfdgh', '2024-07-24 00:15:21'),
(5, 8, 'Cancelled', 'ddfhfdgh', '2024-07-24 00:18:17'),
(6, 10, 'Dispatched', '', '2024-07-24 23:54:30'),
(7, 10, 'Delivered', '', '2024-07-24 23:54:44'),
(8, 8, 'Inprogress', '', '2024-07-24 23:56:06'),
(9, 11, 'Cancelled', 'hfgh', '2024-07-26 23:59:38'),
(10, 4, 'Cancelled', 'fhtff', '2024-08-03 00:05:49'),
(11, 4, 'Dispatched', '', '2024-08-04 01:06:40'),
(12, 16, 'Cancelled', '', '2024-08-05 23:59:08'),
(13, 16, 'Cancelled', '', '2024-08-06 00:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_cat` varchar(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `productd` longtext NOT NULL,
  `product_image` blob NOT NULL,
  `product_qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_title`, `product_price`, `productd`, `product_image`, `product_qty`) VALUES
(5, ' Finance', 'The Psychology of Money', 600, 'the author shares 19 short stories exploring the strange ways people think about money and teaches you how to make better sense of one of life?s most important matters.', 0x313732323739343838345f436170747572652e504e47, 9),
(6, ' Finance', 'The Intelligent Investor', 799, 'The Intelligent Investor', 0x313732323739353031345f69692e4a5047, 0),
(7, ' Finance', 'The Diary of a CEO : The 33 Laws of Business and Life Per Piece', 999, 'This is not a book about business strategy. Strategy changes like the seasons. This is a book about something much more permanent.', 0x313732323739353132355f66322e4a5047, 9),
(8, ' Finance', 'Zero to One', 499, 'Every new creation goes from 0 to 1. This book is about how to get there.', 0x313732323739353236385f7a746f312e4a5047, 5),
(10, ' Science', 'The Theory Of Everything', 499, 'Seven lectures by the brilliant theoretical physicist have been compiled into this book to try to explain to the common man', 0x313732323739353530375f74746f652e4a5047, 10),
(11, ' Science', 'Black Holes (L) : The Reith Lectures', 299, ' In these flagship lectures the legendary physicist argues that if we could only understand black holes and how they challenge the very nature of space and time, we could unlock the secrets of the universe.', 0x313732323739353633375f626c2e4a5047, 10),
(12, ' Science', 'Astrophysics for People in a Hurry', 1499, 'Over a year on the New York Times bestseller list and more than a million copies sold', 0x313732323739353736345f6170682e4a5047, 10),
(13, ' Science', 'Six Easy Pieces', 799, 'Six Easy Pieces is the ideal introduction to the fundamentals of physics by one of the most admired and accessible physicists of modern times.', 0x313732323739353937335f736e702e4a5047, 10),
(16, ' Trading', 'The Intelligent Investor', 799, 'The Intelligent Investor', 0x313732323739363336335f7469692e4a5047, 10),
(17, ' Trading', 'Technical Analysis Of The Financial Markets', 1999, 'Technical Analysis Of The Financial Markets', 0x313732323739363433355f7461666d2e4a5047, 10),
(18, ' Trading', 'Option Volatility and Pricing:', 799, 'Advanced Trading Strategies and Techniques, 2nd Edition PROFESSIONAL FINANCE & INVESTM', 0x313732323739363532315f6f70762e4a5047, 19),
(19, ' Trading', 'Momentum Masters', 499, 'Momentum Masters: A Roundtable Interview with Super Traders', 0x313732323739363630335f6d6d2e4a5047, 10),
(21, ' Fitness', 'The 4-Hour Body', 499, 'The 4-Hour Body will give unbelievable results and change the way you look forever', 0x313732323739363939335f68622e4a5047, 10),
(22, ' Fitness', 'I Want to Die but I Want to Eat Tteokbokki by Baek Sehee and Anton Hur', 799, 'I Want to Die but I Want to Eat Tteokbokki by Baek Sehee and Anton Hur', 0x313732323739373132365f61682e4a5047, 9),
(23, ' Fitness', 'The Body Keeps the Score: Brain, Mind, and Body in the Healing of Trauma', 999, 'The Body Keeps the Score: Brain, Mind, and Body in the Healing of Trauma', 0x313732323739373233335f74622e4a5047, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `timestamp`) VALUES
(1, '', '', 'admin@gmail.com', '12345', '2024-07-21 22:10:01'),
(2, '', '', 'hello@gmail.com', '12345', '2024-07-21 22:27:20'),
(3, '', '', 'roh@gmail.com', '54321', '2024-08-02 23:31:37'),
(4, 'kkkkk', 'kkkkk', 'rrr@gmail.com', '23456', '2024-08-02 23:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `zip` int(30) NOT NULL,
  `mobile` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `userid`, `firstname`, `lastname`, `company`, `address1`, `address2`, `city`, `country`, `zip`, `mobile`) VALUES
(3, '1', 'kkkkk', 'kkkkk', 'kkkkk', 'kkkkkk', 'kkkkkkk', 'kkkk', '', 9, 999999999),
(4, '2', 'rtutrytr', 'rrwerwe', 'rterterte', 'reertert', '', 'rrrrrrr', '', 6666, 5555555);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
