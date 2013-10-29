-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2013 at 07:23 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tubessatu`
--
CREATE DATABASE IF NOT EXISTS `tubessatu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tubessatu`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customerId` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `cardID` varchar(16) NOT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `username`, `email`, `password`, `fullname`, `phone`, `address`, `city`, `province`, `postcode`, `cardID`) VALUES
(1, 'chosa', 'baharudin.afif@ymail.com', 'chosa', 'baharudin afif', '085725345595', 'Jalan Cisitu Indah V Dalam 133', 'Bandung', 'Jawa Barat', '40135', '1133113311331133'),
(2, 'dropdrop23', 'dropdrop23@ymail.com', 'dropdrop23', 'dropdrop23', '085725345595', 'Jalan Cisitu Indah V Dalam', 'Bandung', '', '12345', '1111333311113333'),
(3, 'Baharudin', 'baharudin.afif@ymail.com', '6e5dccd6d772d13ffa2e7a1acdced0bacd38f48db239a901c9a10bb0efa00ca3', 'Baharudin Afif', '085725345595', 'Jalan Cisitu Indah V dalam 133', 'Bandung', 'Jawa Barat', '40135', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `price` int(100) unsigned DEFAULT NULL,
  `stock_count` int(100) unsigned DEFAULT NULL,
  `image_link` varchar(100) DEFAULT NULL,
  `description` text,
  `sold` int(4) unsigned DEFAULT '0',
  `category` tinyint(4) unsigned NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Record dari tabel adalah seluruh keterangan dan properti dari barang.' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `stock_count`, `image_link`, `description`, `sold`, `category`) VALUES
(1, 'Altec Lansing VS4261', 800000, 10, 'images/barang1.jpg', 'Sebuah speaker system yang memiliki banyak kelebihan. Selain walaupun harganya tidak terlalu mahal, speaker ini memiliki kelebihan pada banyak sisi, seperti kejelasan suara dan desainnya yang unik', 1, 1),
(2, 'Fiat 500', 1500000, 5, 'images/barang2.jpg', 'Mobil mini menarik dan unik', 1, 2),
(3, 'Jack Wolfskin', 1500000, 10, 'images/barang3.jpg', 'Jaket tebal dengan desain yang sangat menarik ini cocok sekali digunakan didaerah kutub dan di dataran tinggi.', 1, 3),
(4, 'Acer 4652 G', 5000000, 10, 'images/barang4.jpg', 'Sebuah laptop handal yang mampu memenami anda dalam menjelajahi semua multimedia yang ada. Didukung dengan processor super cepat up to 3.1GHz, sangat cocok bagi anda yang menyukai dunia Game. Produk ini tersedia dalam beberapa warna', 5, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
