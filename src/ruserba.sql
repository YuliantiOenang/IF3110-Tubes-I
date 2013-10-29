-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2013 at 03:07 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ruserba`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` varchar(10) NOT NULL,
  `nama_barang` text NOT NULL,
  `url_gambar` text NOT NULL,
  `harga` double DEFAULT '0',
  `url_link` text NOT NULL,
  `detail` text NOT NULL,
  `stok` int(5) DEFAULT '0',
  `kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--


-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `username` varchar(15) NOT NULL,
  `field_card_num` varchar(10) NOT NULL,
  `card_name` text NOT NULL,
  `exdate` date NOT NULL,
  `security` varchar(3) NOT NULL,
  PRIMARY KEY (`field_card_num`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `field_card_num_2` (`field_card_num`),
  KEY `field_card_num` (`field_card_num`),
  KEY `field_card_num_3` (`field_card_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--



-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id_cart` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  PRIMARY KEY (`id_cart`),
  KEY `id_cart` (`id_cart`),
  KEY `id_cart_2` (`id_cart`),
  KEY `username` (`username`),
  KEY `id_barang` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--



-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `jumlah_transaksi` int(10) DEFAULT '0',
  `alamat` text,
  `provinsi` text,
  `kota` text,
  `kodepos` varchar(10) DEFAULT '',
  `nohp` varchar(12) DEFAULT '',
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username_2` (`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `card_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
