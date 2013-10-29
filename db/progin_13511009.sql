-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2013 at 12:23 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kaskong`
--
CREATE DATABASE IF NOT EXISTS `kaskong` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kaskong`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `terjual` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `deskripsi`, `harga`, `kategori`, `stok`, `terjual`, `gambar`) VALUES
(1, 'Peta', 'Peta Dora The Explorer yang bisa berbicara sendiri', 13000000, 5, 10, 0, 'images/1.png'),
(2, 'Tas', 'Tas Dora The Explorer yang dapat berbicara sendiri', 25000000, 5, 10, 0, 'images/2.jpg'),
(20, 'Bakpia', 'Makanan enak', 500000, 1, 100, 0, 'images/3.jpg'),
(21, 'Martabak Keju', 'Makanan enak selain bakpia', 675000, 1, 50, 0, 'images/4.jpg'),
(22, 'Biskuit', 'Katanya sih enak', 120000, 1, 200, 0, 'images/5.jpg'),
(23, 'Ayam Bakar', 'Ayam yang dibakar', 1000000, 1, 12, 0, 'images/6.jpg'),
(24, 'Kangkung Belacan', 'Kangkung gitu deh', 250000, 1, 5, 0, 'images/7.jpg'),
(25, 'Es Campur', 'Dingin dingin', 200000, 2, 20, 0, 'images/8.jpg'),
(26, 'Jus Alpukat', 'Alpukat pake coklat', 250000, 2, 12, 0, 'images/9.jpg'),
(27, 'Es Teler', 'Mungkin bisa buat teler', 275000, 2, 5, 0, 'images/10.jpg'),
(28, 'Bear Brand Gold Malt Putih', 'Susu beruang emas malt putih', 100000, 2, 6, 0, 'images/11.jpg'),
(29, 'Sepatu Nike', 'Sepatu aja', 2500000, 3, 12, 0, 'images/12.jpg'),
(30, 'Sepatu Ferrari', 'Sepatunya kenceng', 3000000, 3, 4, 0, 'images/13.jpg'),
(31, 'Sepatu Crocs', 'Seperti buaya', 1231231, 3, 2, 0, 'images/14.jpg'),
(32, 'Rumah A', 'Rumah pertama', 1000000000, 4, 5, 0, 'images/15.jpg'),
(33, 'Rumah B', 'Rumah kedua', 1000000000, 4, 5, 0, 'images/16.jpg'),
(34, 'Rumah C', 'Rumah 3', 1000000000, 4, 5, 0, 'images/17.jpg'),
(35, 'Rumah D', 'Rumah contoh', 1000000000, 4, 5, 0, 'images/18.jpg'),
(36, 'Rumah E', 'Contoh rumah', 1000000000, 4, 5, 0, 'images/19.jpg'),
(37, 'Rumah F', 'Rumah contoh', 1000000000, 4, 5, 0, 'images/20.jpg'),
(38, 'Rumah G', 'Contoh rumah', 1000000000, 4, 5, 0, 'images/21.jpg'),
(39, 'Rumah H', 'Rumah contoh', 1000000000, 4, 5, 0, 'images/22.jpg'),
(40, 'Rumah I', 'Contoh rumah', 1000000000, 4, 5, 0, 'images/23.jpg'),
(41, 'Rumah J', 'Rumah contoh', 1000000000, 4, 5, 0, 'images/24.jpg'),
(42, 'Rumah K', 'Contoh rumah', 1000000000, 4, 5, 0, 'images/25.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kodepos` varchar(15) NOT NULL,
  `transaksi` int(11) NOT NULL DEFAULT '0',
  `kredit_nama` varchar(255) DEFAULT NULL,
  `kredit_nomor` varchar(31) DEFAULT NULL,
  `kredit_expired_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`),
  UNIQUE KEY `kredit_nama` (`kredit_nama`),
  UNIQUE KEY `kredit_nomor` (`kredit_nomor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `hp`, `alamat`, `kota`, `provinsi`, `kodepos`, `transaksi`, `kredit_nama`, `kredit_nomor`, `kredit_expired_date`) VALUES
(1, 'Kos Kos', 'pospos', 'f5bb0c8de146c67b44babbf4e6584cc0', 'pos@pos.com', '08999306399', 'Jalan Buntu', 'Karta', 'KartaJ', '13960', 0, NULL, NULL, NULL),
(2, 'Kos Kos', 'jamesjaya', 'd933ae205664a67aba057467d19bb3aa', 'james@escepta.com', '08999306399', '123', 'Jakarta', 'DKI', '13960', 0, NULL, NULL, NULL),
(3, 'Siti Kelvin', 'sitikelvin', 'ddb5503ae5e25f56b250cf19ba8a7552', 'siti@kelvin.com', '08999306399', 'Jalan Buntu No. 123', 'Soerabaja', 'Jawa Timur', '13964', 0, 'Gentong Cool', '123123', NULL),
(4, 'Bolo Bolo', 'hellas', '113ad909a0db6dee7ad583fca9f6556e', 'james.jaya@students.itb.ac.id', '08123859123', 'Jalan Bolo', 'Bolo Bolo', 'Provinsi Bolo Bolo', '13960', 0, 'Soto Ayam', '2093479286', '2013-10-03');
SET FOREIGN_KEY_CHECKS=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
