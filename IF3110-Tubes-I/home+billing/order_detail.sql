-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2013 at 12:06 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tubesweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `productName` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `kategori` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `productName`, `quantity`, `price`, `kategori`) VALUES
(10, 0, 'Merk My Rice 5kg', 45, 56500, 'beras'),
(10, 1, 'Merk Gold Rice Merah (GRM) 5kg', 30, 54500, 'beras'),
(10, 2, 'Merk King Rice Merah (KRM) 5kg', 25, 56000, 'beras'),
(10, 5, 'Merk Guci Mas (GM) 5kg', 1, 52500, 'beras'),
(11, 7, 'Roti Sobek Cotton Melting Cheese', 25, 19500, 'roti'),
(11, 10, 'Roti Tawar Cotton Wheat Kismis', 20, 16500, 'roti'),
(11, 9, 'Roti Manis Burgundy Drops', 10, 5500, 'roti'),
(14, 16, 'Otak - Otak Bandeng Asli Tayu', 16, 25000, 'daging olahan'),
(14, 19, 'Bakso Organic Master', 1, 25000, 'daging olahan'),
(14, 18, 'Dendeng Ayam Panggang Pedas Titiles', 10, 75000, 'daging olahan'),
(14, 20, 'Nugget Organic Master', 12, 20000, 'daging olahan'),
(14, 17, 'Siomay Kemasan Isi 25 dan 50 pcs', 1, 75000, 'daging olahan'),
(15, 11, 'Tanderloin 1kg', 1, 90000, 'daging segar'),
(15, 12, 'Iga Sapi 1kg', 1, 82000, 'daging segar'),
(15, 13, 'Hati Sapi 1kg', 1, 65000, 'daging segar'),
(15, 22, 'Apel Fuji Premium 1kg', 1, 68750, 'buah'),
(15, 23, 'Jeruk Navel Australia 1kg', 1, 52500, 'buah'),
(15, 25, 'Melon Cantaloupe Jepang 1kg', 1, 48000, 'buah'),
(15, 27, 'Bayam Merah 200 gram', 1, 4000, 'sayur'),
(15, 26, 'Bayam Hijau 200 gram', 1, 4500, 'sayur'),
(15, 28, 'Brokoli 250 gram', 1, 8500, 'sayur'),
(15, 31, 'Buncis 250 gram', 1, 4500, 'sayur');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
