-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2013 at 01:33 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cart`
--
CREATE DATABASE IF NOT EXISTS `cart` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `cart`;

-- --------------------------------------------------------

--
-- Table structure for table `list_barang_table`
--

CREATE TABLE IF NOT EXISTS `list_barang_table` (
  `nama_barang` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` int(20) NOT NULL,
  PRIMARY KEY (`nama_barang`),
  KEY `nama_barang` (`nama_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list_barang_table`
--

INSERT INTO `list_barang_table` (`nama_barang`, `jumlah`) VALUES
('beras ramos super', 5),
('mie goreng instant indomie', 8),
('sayur kangkung', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
