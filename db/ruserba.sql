-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2013 at 10:33 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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

INSERT INTO `barang` (`id_barang`, `nama_barang`, `url_gambar`, `harga`, `url_link`, `detail`, `stok`, `kategori`) VALUES
('BRG001', 'Beras', 'img/items/beras.jpg,img/items/beras_1.jpg,img/items/beras_2.jpg', 9000, '', 'Beras adalah bagian bulir padi (gabah) yang telah dipisah dari sekam. Sekam (Jawa merang) secara anatomi disebut ''palea'' (bagian yang ditutupi) dan ''lemma'' (bagian yang menutupi).', 10, 0),
('BRG002', 'Daging', 'img/items/daging.jpg', 20000, '', 'Daging ialah bagian lunak pada hewan yang terbungkus kulit dan melekat pada tulang yang menjadi bahan makanan. Daging tersusun sebagian besar dari jaringan otot, ditambah dengan lemak yang melekat padanya, urat, serta tulang rawan.', 10, 0),
('BRG003', 'Telur', 'img/items/telur.jpg', 1000, '', 'Dalam kebanyakan burung dan reptilia, telur adalah zigot yang dihasilkan melalui fertilisasi sel telur dan berfungsi memelihara dan menjaga embrio. Telur-telur reptilia dan burung diselimuti kerak pelindung, yang memiliki lubang yang sangat kecil agar hewan yang belum lahir tersebut dapat bernapas.', 100, 0);

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
-- Table structure for table `login_cache`
--

CREATE TABLE IF NOT EXISTS `login_cache` (
  `key` varchar(42) NOT NULL,
  `username` varchar(15) NOT NULL,
  `expdate` datetime NOT NULL,
  PRIMARY KEY (`key`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_cache`
--

INSERT INTO `login_cache` (`key`, `username`, `expdate`) VALUES
('a59fc18ebee26fc83f64ede86d881b807a01f38a', 'azon04', '2013-11-27 01:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
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

INSERT INTO `user` (`username`, `password`, `nama_lengkap`, `email`, `jumlah_transaksi`, `alamat`, `provinsi`, `kota`, `kodepos`, `nohp`) VALUES
('azon04', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Ahmad Fauzan', 'azon04@gmail.com', 0, 'Jl. Pelesiran 61 Bandung', 'Jawa Barat', 'Bandung', '40116', '081996892112');

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
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
