-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2013 at 08:29 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `wbd1`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nomorhp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kodepos` int(11) NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`username`, `password`, `nama`, `nomorhp`, `alamat`, `provinsi`, `kota`, `kodepos`, `email`) VALUES
('rifki', 'kiki', 'kiki', '123', 'cimahi', 'jabar', 'bandung', 123, 'kiki@kiki.kiki'),
('asyamasu', 'asyamasu', 'asyam asu', '0123', 'asyam asu', 'asyam asu', 'asyam asu', 0, 'asyam@asu.asu'),
('a', 'a', 'a', 'a', 'a', 'a', 'a', 0, 'a'),
('q', 'qq', 'q', 'q', 'q', 'q', 'q', 0, 'q');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `harga` double NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tambahan` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `gambar`, `kategori`, `harga`, `jumlah`, `keterangan`, `tambahan`) VALUES
(1, 'beras 3 kg', 'images/default.png', 'makanan', 12000, 10, 'beras dikarungin ', ''),
(2, 'momogi rasa keju', 'images/default.png', 'makanan', 1000, 100, '', ''),
(3, 'momogi rasa jagung bakar', 'images/default.png', 'makanan', 1000, 100, '', ''),
(4, 'marimas', 'images/default.png', 'minuman', 500, 40, '', ''),
(5, 'fanta', 'images/default.png', 'minuman', 500, 10, '', ''),
(6, 'bigcola', 'images/default.png', 'minuman', 3000, 12, '', ''),
(7, 'katel', 'images/default.png', 'Alat dapur', 5000, 30, '', ''),
(8, 'panci', 'images/default.png', 'Alat dapur', 8000, 12, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kartu_kredit`
--

CREATE TABLE IF NOT EXISTS `kartu_kredit` (
  `owner` varchar(20) NOT NULL,
  `card_number` char(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `expired` varchar(10) NOT NULL,
  PRIMARY KEY  (`card_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kartu_kredit`
--

INSERT INTO `kartu_kredit` (`owner`, `card_number`, `nama`, `expired`) VALUES
('q', '2172310', 'qq', '10-10-2020'),
('a', 'a', 'a', 'a');
