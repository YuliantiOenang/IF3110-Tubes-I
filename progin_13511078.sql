-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 27, 2013 at 05:37 PM
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
  `foto` text NOT NULL,
  `jmlhtransaksi` int(11) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`username`, `password`, `nama`, `nomorhp`, `alamat`, `provinsi`, `kota`, `kodepos`, `email`, `foto`, `jmlhtransaksi`) VALUES
('rifki', 'kiki', 'Rifki Afina Putri', '0890980999', 'cimahi', 'jawa barat', 'bandung...', 490940, 'rifki@fina-put.ri', '1378714_10201562960288197_1397267956_a.jpg', 0),
('identityope', 'opeopeope', 'Taufik Hidayat', '087825996140', 'jalan mana aja', 'jawa barat', 'bandung', 40262, 'identityope@gmail.com', '1378714_10201562960288197_1397267956_a.jpg', 0);

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
  `terjual` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `gambar`, `kategori`, `harga`, `jumlah`, `keterangan`, `tambahan`, `terjual`) VALUES
(1, 'beras 3 kg', 'images/default.png', 'makanan pokok', 12000, 10, 'beras dikarungin ', '', 0),
(2, 'momogi rasa keju', 'images/default.png', 'makanan ringan', 1000, 100, '', '', 0),
(3, 'momogi rasa jagung bakar', 'images/default.png', 'makanan ringan', 1000, 100, '', '', 0),
(4, 'marimas', 'images/default.png', 'minuman', 500, 40, '', '', 0),
(5, 'fanta', 'images/default.png', 'minuman', 500, 10, '', '', 0),
(6, 'bigcola', 'images/default.png', 'minuman', 3000, 12, '', '', 0),
(7, 'katel', 'images/default.png', 'Alat dapur', 5000, 30, '', '', 0),
(8, 'panci', 'images/default.png', 'Alat dapur', 8000, 12, '', '', 0),
(9, 'indomie', 'images/default.png', 'makanan siap saji', 800, 100, 'makanan favorit mahasiswa terutama anak-anak kosan', '', 0),
(10, 'popmie', 'images/default.png', 'makanan siap saji', 2000, 23, 'saingannya indomie, lebih portable, bisa dibawa kemana-mana', '', 0),
(11, 'buku binder', 'images/default.png', 'alat kantor', 5000, 11, '', '', 0),
(12, 'baju koko', 'images/default.png', 'pakaian', 35000, 10, '', '', 0);

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
