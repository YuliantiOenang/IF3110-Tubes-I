-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2013 at 01:55 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `progin_13510105`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `card_number` varchar(256) NOT NULL,
  `name_on_card` varchar(256) NOT NULL,
  PRIMARY KEY (`card_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`card_number`, `name_on_card`) VALUES
('12', 'aidil'),
('13', 'BS');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) NOT NULL,
  `stok` int(255) NOT NULL,
  `terjual` int(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `kategori` varchar(256) NOT NULL,
  `url_gambar` varchar(256) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `stok`, `terjual`, `harga`, `kategori`, `url_gambar`) VALUES
(1, 'Beras Cap Kembang Bandung', 10, 0, 8000, 'beras', 'images/1.jpg'),
(2, 'Beras Guci Mas', 10, 0, 9000, 'beras', 'images/2.jpg'),
(3, 'Beras BMW', 10, 0, 10000, 'beras', 'images/3.jpg'),
(4, 'Beras Pinguin', 10, 0, 11000, 'beras', 'images/4.jpg'),
(5, 'Beras Capit', 10, 0, 12000, 'beras', 'images/5.jpg'),
(6, 'Beras Tiga Jambu', 10, 0, 13000, 'beras', 'images/6.jpg'),
(7, 'Beras Panda', 10, 0, 14000, 'beras', 'images/7.jpg'),
(8, 'Beras VIP', 10, 0, 8000, 'beras', 'images/8.jpg'),
(9, 'Beras Walet', 10, 0, 9000, 'beras', 'images/9.jpg'),
(10, 'Beras Kingrice Merah Solo', 10, 0, 10000, 'beras', 'images/10.jpg'),
(11, 'Beras Kingrice Hijau Solo', 10, 0, 11000, 'beras', 'images/11.jpg'),
(12, 'Beras Goldrice Merah', 10, 0, 12000, 'beras', 'images/12.jpg'),
(13, 'Beras Goldrice Hijau', 10, 0, 13000, 'beras', 'images/13.jpg'),
(14, 'Beras Cap Louhan', 10, 0, 14000, 'beras', 'images/14.jpg'),
(15, 'Beras Myrice', 10, 0, 8000, 'beras', 'images/15.jpg'),
(16, 'Sayur Bayam', 10, 0, 6000, 'sayur', 'images/16.jpg'),
(17, 'Sawi', 10, 0, 6000, 'sayur', 'images/17.jpg'),
(18, 'Kangkung', 10, 0, 7000, 'sayur', 'images/18.jpg'),
(19, 'Timun', 10, 0, 8000, 'sayur', 'images/19.jpg'),
(20, 'Seledri', 10, 0, 4000, 'sayur', 'images/20.jpg'),
(21, 'Daun Singkong', 10, 0, 5000, 'sayur', 'images/21.jpg'),
(22, 'Peria', 10, 0, 6000, 'sayur', 'images/22.jpg'),
(23, 'Brokoli', 10, 0, 7000, 'sayur', 'images/23.jpg'),
(24, 'Bok Choy', 10, 0, 8000, 'sayur', 'images/24.jpg'),
(25, 'Buncis', 10, 0, 4000, 'sayur', 'images/25.jpg'),
(26, 'Wortel', 10, 0, 5000, 'sayur', 'images/26.jpg'),
(27, 'Kol', 10, 0, 6000, 'sayur', 'images/27.jpg'),
(28, 'Petai', 10, 0, 7000, 'sayur', 'images/28.jpg'),
(29, 'Asparagus', 10, 0, 8000, 'sayur', 'images/29.jpg'),
(30, 'Kacang Panjang', 10, 0, 4000, 'sayur', 'images/30.jpg'),
(31, 'Kunyit', 10, 0, 1000, 'bumbu', 'images/31.jpg'),
(32, 'Lada Hitam', 10, 0, 1000, 'bumbu', 'images/32.jpg'),
(33, 'Kayu Manis', 10, 0, 2000, 'bumbu', 'images/33.jpg'),
(34, 'Jahe', 10, 0, 3000, 'bumbu', 'images/34.jpg'),
(35, 'Bawang Merah', 10, 0, 4000, 'bumbu', 'images/35.jpg'),
(36, 'Bawang Putih', 10, 0, 5000, 'bumbu', 'images/36.jpg'),
(37, 'Daun Bawang', 10, 0, 1000, 'bumbu', 'images/37.jpg'),
(38, 'Daun Pandan', 10, 0, 2000, 'bumbu', 'images/38.jpg'),
(39, 'Daun Salam', 10, 0, 3000, 'bumbu', 'images/39.jpg'),
(40, 'Jintan', 10, 0, 4000, 'bumbu', 'images/40.jpg'),
(41, 'Kemiri', 10, 0, 5000, 'bumbu', 'images/41.jpg'),
(42, 'Ketumbar', 10, 0, 1000, 'bumbu', 'images/42.jpg'),
(43, 'Lengkuas', 10, 0, 2000, 'bumbu', 'images/43.jpg'),
(44, 'Serai', 10, 0, 3000, 'bumbu', 'images/44.jpg'),
(45, 'Pala', 10, 0, 4000, 'bumbu', 'images/45.jpg'),
(46, 'Wijen', 10, 0, 5000, 'bumbu', 'images/46.jpg'),
(47, 'C&H Sugar', 10, 0, 10000, 'gula', 'images/47.jpg'),
(48, 'Tate Lyle Sugar', 10, 0, 11000, 'gula', 'images/48.jpg'),
(49, 'Gula Piramid Kristal', 10, 0, 12000, 'gula', 'images/49.jpg'),
(50, 'Gula Prai', 10, 0, 13000, 'gula', 'images/50.jpg'),
(51, 'Raja Gula', 10, 0, 14000, 'gula', 'images/51.jpg'),
(52, 'Gula Kwala Madu', 10, 0, 15000, 'gula', 'images/52.jpg'),
(53, 'Gula PSM', 10, 0, 10000, 'gula', 'images/53.jpg'),
(54, 'Gula Legiku', 10, 0, 11000, 'gula', 'images/54.jpg'),
(55, 'Gua Ragula', 10, 0, 12000, 'gula', 'images/55.jpg'),
(56, 'Gulaku', 10, 0, 13000, 'gula', 'images/56.jpg'),
(57, 'Gula Indosugar', 10, 0, 14000, 'gula', 'images/57.jpg'),
(58, 'Gula Indolampung', 10, 0, 15000, 'gula', 'images/58.jpg'),
(59, 'Pioneer Sugar', 10, 0, 10000, 'gula', 'images/59.jpg'),
(60, 'C&H Granulated Sugar', 10, 0, 11000, 'gula', 'images/60.jpg'),
(61, 'Silver Spoon Sugar', 10, 0, 12000, 'gula', 'images/61.jpg'),
(62, 'Sapi Lokal', 10, 0, 96000, 'daging', 'images/62.jpg'),
(63, 'Sapi Australia', 10, 0, 100000, 'daging', 'images/63.jpg'),
(64, 'Sapi USA', 10, 0, 110000, 'daging', 'images/64.jpg'),
(65, 'Sapi New Zealand', 10, 0, 105000, 'daging', 'images/65.jpg'),
(66, 'Sapi Lokal High Grade', 10, 0, 120000, 'daging', 'images/66.jpg'),
(67, 'Rusa Lokal', 10, 0, 140000, 'daging', 'images/67.jpg'),
(68, 'Rusa Impor', 10, 0, 160000, 'daging', 'images/68.jpg'),
(69, 'Ayam Kampung', 10, 0, 78000, 'daging', 'images/69.jpg'),
(70, 'Ayam Potong', 10, 0, 70000, 'daging', 'images/70.jpg'),
(71, 'Bebek', 10, 0, 85000, 'daging', 'images/71.jpg'),
(72, 'Kambing ', 10, 90000, 14000, 'daging', 'images/72.jpg'),
(73, 'Kambing Giling', 93000, 0, 15000, 'daging', 'images/73.jpg'),
(74, 'Kambing Potong', 92000, 0, 10000, 'daging', 'images/74.jpg'),
(75, 'Kerbau', 10, 0, 95000, 'daging', 'images/75.jpg'),
(76, 'Kelinci', 10, 0, 50000, 'daging', 'images/76.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_shopping_bag`
--

CREATE TABLE IF NOT EXISTS `detail_shopping_bag` (
  `id_shopping_bag` int(255) NOT NULL,
  `id_barang` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `keterangan` varchar(256) DEFAULT NULL,
  KEY `id_shopping_bag` (`id_shopping_bag`,`id_barang`),
  KEY `id_barang` (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kartu_kredit`
--

CREATE TABLE IF NOT EXISTS `kartu_kredit` (
  `card_number` varchar(256) NOT NULL,
  `name_on_card` varchar(256) NOT NULL,
  `expired_date` date NOT NULL,
  `username` varchar(256) NOT NULL,
  PRIMARY KEY (`card_number`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kartu_kredit`
--

INSERT INTO `kartu_kredit` (`card_number`, `name_on_card`, `expired_date`, `username`) VALUES
('13', 'BS', '2013-10-17', 'ditra77');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `username` varchar(256) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `kota_kab` varchar(256) NOT NULL,
  `provinsi` varchar(256) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `fullname`, `password`, `email`, `alamat`, `kota_kab`, `provinsi`, `no_hp`, `kode_pos`) VALUES
('ditra77', 'Aidil Syaputra', 'milan77', 'aidil.syaputra@pln.co.id', 'Jln.Cisitu Lama gang 2', 'Bandung', 'Jawa Barat', '085263867220', '45324');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_bag`
--

CREATE TABLE IF NOT EXISTS `shopping_bag` (
  `id_shopping_bag` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL,
  PRIMARY KEY (`id_shopping_bag`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `shopping_bag`
--

INSERT INTO `shopping_bag` (`id_shopping_bag`, `username`, `status`) VALUES
(1, 'ditra77', 'Selesai'),
(3, 'ditra77', 'Selesai');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_shopping_bag`
--
ALTER TABLE `detail_shopping_bag`
  ADD CONSTRAINT `detail_shopping_bag_ibfk_1` FOREIGN KEY (`id_shopping_bag`) REFERENCES `shopping_bag` (`id_shopping_bag`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_shopping_bag_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kartu_kredit`
--
ALTER TABLE `kartu_kredit`
  ADD CONSTRAINT `kartu_kredit_ibfk_2` FOREIGN KEY (`card_number`) REFERENCES `bank` (`card_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kartu_kredit_ibfk_1` FOREIGN KEY (`username`) REFERENCES `pengguna` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shopping_bag`
--
ALTER TABLE `shopping_bag`
  ADD CONSTRAINT `shopping_bag_ibfk_1` FOREIGN KEY (`username`) REFERENCES `pengguna` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
