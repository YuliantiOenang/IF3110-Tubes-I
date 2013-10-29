-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2013 at 02:19 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ruserba`
--
CREATE DATABASE IF NOT EXISTS `ruserba` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ruserba`;

-- --------------------------------------------------------

--
-- Table structure for table `credit_table`
--

CREATE TABLE IF NOT EXISTS `credit_table` (
  `number` varchar(20) NOT NULL,
  `name` varchar(26) NOT NULL,
  `saldo` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit_table`
--

INSERT INTO `credit_table` (`number`, `name`, `saldo`) VALUES
('1010101010101010', 'haha', 0),
('123123123123123', 'abc def', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `username` varchar(28) NOT NULL,
  `password` varchar(28) NOT NULL,
  `nama_lengkap` varchar(36) NOT NULL,
  `email` varchar(28) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(28) NOT NULL,
  `kecamatan` varchar(28) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `handphone` varchar(15) NOT NULL,
  `n_transaksi` int(11) NOT NULL DEFAULT '0',
  `credit` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`username`, `password`, `nama_lengkap`, `email`, `alamat`, `provinsi`, `kecamatan`, `kodepos`, `handphone`, `n_transaksi`, `credit`) VALUES
('asdsdsa', '00000000', 'a a', 's@s.ss', 'tes tes', 'agagag', 'asdasd', 11111, '1111111111', 0, NULL),
('bimagendut', '12121212', 'Bima Laksmana', 'bima@ndut.dut', '', '', '', 0, '', 0, NULL),
('dikra.prasetya', 'adadadad', 'a a', 's@s.ss', 'aasdasd dfasf', 'ada', 'asdasd', 12345, '2222222222', 0, NULL),
('hahaha', 'abababab', 'a abb', 's@s.ss', 'agag', 'papda', 'adsda', 11111, '1111111111', 0, '123123123123123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
