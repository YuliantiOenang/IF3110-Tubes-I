-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2013 at 02:59 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data`
--
CREATE DATABASE IF NOT EXISTS `data` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `data`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `kode_pos` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `alamat`, `provinsi`, `kabupaten`, `kode_pos`, `email`) VALUES
(1, 'Alex', 'alex', 'ganteng', 'cisitu baru', 'lampung', 'kota karang', '35231', 'alex.ganteng@gmail.com'),
(2, 'Adhika Aryantio', 'elvenunion', '', 'kota karang', 'Lampung', 'kota karang', '35231', 'adhikaaryantio.x6@gmail.com'),
(3, 'Rizky', 'ram', '1234', 'Cisitu Lama 11', 'Jawa Barat', 'Bandung', '12345', 'Rizky@gmail.com'),
(4, 'rizky', 'rizky', 'rizky', 'rizky', 'Sumatera Selatan', 'palembang', '11111', 'rizky@gmail.com'),
(9, 'M Rizky Wb', 'kiky13', 'asda', 'Cisitu Lama 11', 'Jawa Barat', 'Bandung', '12312', 'kiky.widya95@gmail.com'),
(16, 'k', 'k', 'k', 'k', 'Kalimantan Barat', 'k', 'k', 'k@yahoo.com'),
(17, 'j', 'j', 'j', 'di kosan', 'Nusa Tenggara Timur', 'j', 'j', 'alex.ganteng@gmail.com'),
(18, 'l', 'l', 'l', 'l', 'Nusa Tenggara Timur', 'l', 'l', 'alex.ganteng@gmail.com'),
(19, 'billy', 'bil', 'bil', 'bil', 'Kepulauan Riau', 'bil', '12345', 'bil@bil.bil'),
(20, 'asdf', 'asdf', 'asdf', 'asdf', 'Nusa Tenggara Timur', 'asdf', 'asdf', 'asoy@gmail.com'),
(21, 'asdf', 'asdasd', 'asd', 'asdf', 'Kalimantan Barat', 'asd', 'asd', 'asd@asd.asd'),
(22, 'qwer', 'qwer', 'qwer', 'g', 'Kalimantan Barat', 'g', 'g', 'alex.ganteng@gmail.com'),
(23, 'test', 'test', 'test', 'Indonesia', 'Aceh', 'test', 'tests', 'test@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
