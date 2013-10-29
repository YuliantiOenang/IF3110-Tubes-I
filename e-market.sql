-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2013 at 03:22 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `waserda`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE IF NOT EXISTS `data_barang` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`id_barang`, `nama`, `harga`, `stok`, `kategori`) VALUES
(0, 'barang1', 1000, 2, ''),
(1, 'adada', 1000, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `data_kartu_kredit`
--

CREATE TABLE IF NOT EXISTS `data_kartu_kredit` (
  `no_kartu` varchar(50) NOT NULL,
  `nama_pemegang_kartu` varchar(45) NOT NULL,
  `expired_date` date NOT NULL,
  PRIMARY KEY (`no_kartu`),
  UNIQUE KEY `no_kartu_UNIQUE` (`no_kartu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `data_keranjang`
--

CREATE TABLE IF NOT EXISTS `data_keranjang` (
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE IF NOT EXISTS `data_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `no_handphone` varchar(15) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `provinsi` varchar(45) DEFAULT NULL,
  `kabupaten_kota` varchar(45) DEFAULT NULL,
  `kodepos` varchar(10) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id_user`, `username`, `password`, `nama_lengkap`, `no_handphone`, `alamat`, `provinsi`, `kabupaten_kota`, `kodepos`, `email`) VALUES
(1, 'username', 'password', 'test', NULL, NULL, NULL, NULL, NULL, 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `nama`) VALUES
(1, 'testaja'),
(2, 'coba lagi'),
(3, 'dong broh');

-- --------------------------------------------------------

--
-- Table structure for table `user_kk`
--

CREATE TABLE IF NOT EXISTS `user_kk` (
  `id_user` int(11) NOT NULL,
  `no_kartu` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`,`no_kartu`),
  UNIQUE KEY `no_kartu_UNIQUE` (`no_kartu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_keranjang`
--
ALTER TABLE `data_keranjang`
  ADD CONSTRAINT `fk_data_keranjang_data_barang1` FOREIGN KEY (`id_user`) REFERENCES `data_barang` (`id_barang`),
  ADD CONSTRAINT `fk_data_keranjang_data_user` FOREIGN KEY (`id_user`) REFERENCES `data_user` (`id_user`);

--
-- Constraints for table `user_kk`
--
ALTER TABLE `user_kk`
  ADD CONSTRAINT `fk_user_kk_data_kartu_kredit1` FOREIGN KEY (`no_kartu`) REFERENCES `data_kartu_kredit` (`no_kartu`),
  ADD CONSTRAINT `fk_user_kk_data_user1` FOREIGN KEY (`id_user`) REFERENCES `data_user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
