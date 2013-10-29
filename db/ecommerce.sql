-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2013 at 11:00 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--
CREATE DATABASE IF NOT EXISTS `ecommerce` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ecommerce`;

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE IF NOT EXISTS `artists` (
  `artist_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(40) NOT NULL,
  PRIMARY KEY (`artist_id`),
  UNIQUE KEY `full_name` (`last_name`,`first_name`,`middle_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`artist_id`, `first_name`, `middle_name`, `last_name`) VALUES
(1, 'asdas', 'sadas', 'dasdsda');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `pass` char(40) NOT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `email` (`email`),
  KEY `login` (`email`,`pass`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL,
  `total` decimal(10,2) unsigned NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`),
  KEY `customer_id` (`customer_id`),
  KEY `order_date` (`order_date`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `total`, `order_date`) VALUES
(1, 1, '178.93', '2013-10-29 07:47:53'),
(2, 1, '178.93', '2013-10-29 07:49:10');

-- --------------------------------------------------------

--
-- Table structure for table `order_contents`
--

CREATE TABLE IF NOT EXISTS `order_contents` (
  `oc_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `print_id` int(10) unsigned NOT NULL,
  `quantity` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `price` decimal(6,2) unsigned NOT NULL,
  `ship_date` datetime DEFAULT NULL,
  PRIMARY KEY (`oc_id`),
  KEY `order_id` (`order_id`),
  KEY `print_id` (`print_id`),
  KEY `ship_date` (`ship_date`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `order_contents`
--

INSERT INTO `order_contents` (`oc_id`, `order_id`, `print_id`, `quantity`, `price`, `ship_date`) VALUES
(1, 1, 1, 1, '9999.99', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prints`
--

CREATE TABLE IF NOT EXISTS `prints` (
  `print_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `artist_id` int(10) unsigned NOT NULL,
  `print_name` varchar(60) NOT NULL,
  `price` decimal(6,2) unsigned NOT NULL,
  `size` varchar(60) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image_name` varchar(60) NOT NULL,
  PRIMARY KEY (`print_id`),
  KEY `artist_id` (`artist_id`),
  KEY `print_name` (`print_name`),
  KEY `price` (`price`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `prints`
--

INSERT INTO `prints` (`print_id`, `artist_id`, `print_name`, `price`, `size`, `description`, `image_name`) VALUES
(1, 1, 'asdas', '9999.99', 'kecil', 'lezat mampus', 'Indomie_(pack).jpg'),
(2, 1, 'Indomie Goreng Biasa', '20.00', 'kecil', 'lezat mampus', 'Indomie_(pack).jpg'),
(3, 1, 'Sabun Mandi', '2.00', 'kecil', 'Buat mandi lah bego atau nyabun kalo kebelet', 'sabun.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `psw`) VALUES
('aku', 'gaul');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` char(40) NOT NULL,
  `user_level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `active` char(32) DEFAULT NULL,
  `registration_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  KEY `login` (`email`,`pass`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `pass`, `user_level`, `active`, `registration_date`) VALUES
(1, 'elfino', 'sitompul', 'elfino@live.com', '1234', 1, NULL, '0000-00-00 00:00:00'),
(2, 'new', 'baru', 'new@baru.com', 'd7f9c55f765a5ab66a7c62701b7be28693d78f07', 0, NULL, '2013-10-29 11:47:04'),
(3, 'aa', 'aa', 'as@aa.com', '8cb2237d0679ca88db6464eac60da96345513964', 0, 'c1c06623216747a0ea6d78bd2445b95b', '2013-10-29 11:51:30'),
(4, 'barss', 'basasd', 'asdas@asda.com', '3da541559918a808c2402bba5012f6c60b27661c', 0, '3fa9912607ad8f98fa29f527a60c5b0d', '2013-10-29 11:52:35'),
(5, 'buzi', 'baik', 'user@baik.com', '33b1eac210971fb02a3b90afce9dbff758be794d', 1, NULL, '2013-10-29 11:59:08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
