-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2013 at 07:39 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `progin`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(75) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kategori`, `nama`, `harga`, `deskripsi`, `gambar`, `stok`) VALUES
(1, 'Beras', 'Beras Raja Lele', 300, 'Beras dengan kualitas terjamin', 'beras.jpg', 2),
(2, 'Beras', 'Beras Raja Lele', 300, 'Beras dengan kualitas terjamin', 'beras.jpg', 2),
(3, 'Beras', 'Beras Super', 500, 'Beras dengan kualitas terjamin', 'beras.jpg', 2),
(4, 'Daging', 'Ayam', 200, 'Daging Ayam Kampung', 'daging.jpg', 2),
(5, 'Daging', 'Sapi', 400, 'Daging Sapi dengan kualitas terjamin', 'daging.jpg', 2),
(6, 'Daging', 'Kambing', 500, 'Kambing dengan kualitas terjamin', 'daging.jpg', 2),
(7, 'Ikan', 'Lele', 100, 'ikan dengan kualitas terjamin', 'ikan.jpg', 2),
(8, 'Ikan', 'Ikan Mas', 100, 'Ikan dengan kualitas terjamin', 'ikan.jpg', 2),
(9, 'Teh', 'Teh botol Sisri', 300, 'Teh botol', 'teh.jpg', 2),
(10, 'Teh', 'Teh Fresti', 300, 'Teh botol', 'teh.jpg', 2),
(11, 'Kopi', 'Top Kopi', 300, 'Bongkar Bongkar Bongkar', 'kopi.jpg', 2),
(12, 'Kopi', 'Kapal Api', 300, 'Kopi enak', 'kopi.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `Username` varchar(75) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `Fullname` varchar(75) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Alamat` varchar(75) NOT NULL,
  `Provinsi` varchar(75) NOT NULL,
  `Kota` varchar(75) NOT NULL,
  `Kodepos` varchar(20) NOT NULL,
  `NomorHP` int(20) NOT NULL,
  `CCNumber` varchar(16) NOT NULL,
  `namabarang` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Username`, `Email`, `Fullname`, `Password`, `Alamat`, `Provinsi`, `Kota`, `Kodepos`, `NomorHP`, `CCNumber`, `namabarang`, `harga`) VALUES
(1, 'Jokowow', 'Joko@yahoo.com', 'Joko wowow', '123456789012', 'cisitu', 'Jawa barat', 'coblong', '1234', 2147483647, '1234567890123456', '', ''),
(8, '', '', '', '', '', '', '', '', 0, '', '', ''),
(9, 'username', 'email@yahoo.com', 'nama lengkap', 'password', '', '', '', '', 0, '', '', ''),
(10, 'tomos', 'tomo@tomo.com', 'tomo tomo', 'password', '', '', '', '', 0, '', '', ''),
(11, 'username1', 'tes@yahoo.com', 'riefky tom', 'password', '', '', '', '', 0, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
