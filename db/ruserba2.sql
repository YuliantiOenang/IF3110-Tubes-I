-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2013 at 06:12 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `ruserba2`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `terjual` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `harga`, `stok`, `kategori`, `terjual`) VALUES
(1, 'Samsung galaxy Tab 3 7.0', 25000, 12, 'tablet', 2),
(2, 'Google Nexus 7', 15000, 2, 'tablet', 0),
(3, 'Apple iPad Mini 2', 20000, 4, 'tablet', 2),
(4, 'Acer Iconia Tab A1-810', 16000, 4, 'tablet', 2),
(5, 'Sony Xperia Z LTE', 30000, 2, 'tablet', 3),
(6, 'Sony Xperia Z', 30000, 4, 'smartphone', 3),
(7, 'Nokia Lumia', 20000, 4, 'smartphone', 4),
(8, 'Samsung Galaxy S4', 35000, 3, 'smartphone', 2),
(9, 'Apple iPhone 5S', 40000, 5, 'smartphone', 2),
(10, 'HTC One Max', 40000, 6, 'smartphone', 1),
(11, 'Nintendo 3DS', 10000, 7, 'console game', 9),
(12, 'Sony Playstation 3', 20000, 15, 'console game', 4),
(13, 'Sony Playstation 4', 25000, 5, 'console game', 16),
(14, 'PSVita', 13000, 5, 'console game', 3),
(15, 'Mirosoft Surface Pro', 30000, 8, 'notebook', 7),
(16, 'Macbook Air 13inch', 50000, 5, 'notebook', 4),
(17, 'Dell Latitude 3300', 20000, 4, 'notebook', 4),
(18, 'Alienware 17', 70000, 6, 'notebook', 2),
(19, 'Acer Aspire M5-583P', 35000, 3, 'notebook', 4),
(20, 'PSP', 12000, 9, 'console game', 20);

-- --------------------------------------------------------

--
-- Table structure for table `console game`
--

CREATE TABLE IF NOT EXISTS `console game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `terjual` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `console game`
--

INSERT INTO `console game` (`id`, `nama`, `harga`, `stok`, `kategori`, `terjual`) VALUES
(1, 'Nintendo 3DS', 10000, 7, 'console game', 9),
(2, 'Sony Playstation 3', 20000, 15, 'console game', 4),
(3, 'Sony Playstation 4', 25000, 5, 'console game', 16),
(4, 'PSVita', 13000, 5, 'console game', 3),
(5, 'PSP', 12000, 9, 'console game', 20);

-- --------------------------------------------------------

--
-- Table structure for table `hard disk`
--

CREATE TABLE IF NOT EXISTS `hard disk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `terjual` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hard disk`
--

INSERT INTO `hard disk` (`id`, `nama`, `harga`, `stok`, `kategori`, `terjual`) VALUES
(1, 'Western Digital My Book Essential 2 TB', 5000, 6, 'hard disk', 20),
(2, 'Western Digital My Book Essential 3 TB', 6000, 7, 'hard disk', 13),
(3, 'Western Digital My Passport 500 GB', 3500, 14, 'hard disk', 4),
(4, 'Hitachi Touro Mobile 1 TB', 4000, 4, 'hard disk', 10),
(5, 'Hitachi Touro Desk 4 TB', 7000, 5, 'hard disk', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notebook`
--

CREATE TABLE IF NOT EXISTS `notebook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `terjual` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `notebook`
--

INSERT INTO `notebook` (`id`, `nama`, `harga`, `stok`, `kategori`, `terjual`) VALUES
(1, 'Microsoft Surface Pro', 30000, 8, 'notebook', 7),
(2, 'Macbook Air 13inch', 50000, 5, 'notebook', 4),
(3, 'Dell Latitude 3300', 20000, 4, 'notebook', 4),
(4, 'Alienware 17', 70000, 6, 'notebook', 2),
(5, 'Acer Aspire M5-583P', 35000, 3, 'notebook', 4);

-- --------------------------------------------------------

--
-- Table structure for table `smartphone`
--

CREATE TABLE IF NOT EXISTS `smartphone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `terjual` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `smartphone`
--

INSERT INTO `smartphone` (`id`, `nama`, `harga`, `stok`, `kategori`, `terjual`) VALUES
(1, 'Sony Xperia Z', 30000, 4, 'smartphone', 3),
(2, 'Nokia Lumia', 20000, 4, 'smartphone', 4),
(3, 'Samsung Galaxy S4', 35000, 3, 'smartphone', 2),
(4, 'Apple iPhone 5S', 40000, 5, 'smartphone', 2),
(5, 'HTC One Max', 40000, 6, 'smartphone', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tablet`
--

CREATE TABLE IF NOT EXISTS `tablet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `terjual` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tablet`
--

INSERT INTO `tablet` (`id`, `nama`, `harga`, `stok`, `kategori`, `terjual`) VALUES
(1, 'Samsung Galaxy Tab 3 7.0', 25000, 12, 'tablet', 2),
(2, 'Google Nexus 7', 15000, 2, 'tablet', 0),
(3, 'Apple iPad Mini 2', 20000, 4, 'tablet', 2),
(4, 'Acer Iconia Tab A1-810', 16000, 4, 'tablet', 2),
(5, 'Sony Xperia Z LTE', 30000, 2, 'tablet', 3);

-- --------------------------------------------------------

