-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2013 at 02:46 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

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
  `id` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `keterangan` varchar(1024) NOT NULL,
  `total_stok` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `harga` int(11) NOT NULL,
  `terjual` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `kategori` (`kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `kategori`, `keterangan`, `total_stok`, `image`, `harga`, `terjual`) VALUES
(1, 'Ramos Super (Ciherang) 30kg', 'Beras', 'Beras Ramos Super berukuran 30 kg. Berasnya pulen, sepulen suaminya KD', 40, 'images/ramos_super.jpg', 67000, 24),
(2, 'Pandanwangi 30kg', 'Beras', 'Beras Pandanwangi berukuran 30 kg. Berasnya pulen dan wangi.', 40, 'images/pandan_wangi.jpg', 84000, 57),
(3, 'Nissin Yakisoba with Mayonaise', 'Mie Instant', 'Produk Impor. Laku lho di Jepang.', 500, 'images/nissin_yakisoba.jpeg', 2100, 436),
(4, 'Indomie Goreng Original', 'Mie Instant', 'Mie Goreng biasa aja. Banyak kok yang jual.', 400, 'images/indomie_goreng.jpg', 1400, 420),
(5, 'Indomie Goreng Rendang', 'Mie Instant', 'Mie Goreng Rasa Rendand. Rasanya nendang. Kalo campur nasi dan mie goreng cabe ijo bisa jadi nasi padang.', 350, 'images/indomie_rendang.jpg', 1600, 367),
(6, 'Nong Shim Shin Ramyun Black', 'Mie Instant', 'Mie ramen khas Korea.', 200, 'images/ramyun_black.jpg', 2400, 643),
(7, 'Kecap Bango Botol Besar', 'Kecap', 'Kecap yang hitam dan kental. Khas indonesia', 30, 'images/bango.jpg', 24000, 28),
(8, 'Kecap ABC Botol Besar', 'Kecap', 'Kecap sebelum DEF.', 30, 'images/abc.jpg', 22500, 16),
(9, 'Mie Sedap Goreng Original', 'Mie Instant', '', 300, 'images/sedap_goreng.jpg', 1300, 0),
(10, 'Mie Sedap Rasa Soto', 'Mie Instant', '', 400, 'images/sedap_soto.jpg', 1300, 0),
(11, 'Mie Sedap Rasa Kari Spesial', 'Mie Instant', '', 340, 'images/sedap_kari.jpg', 1650, 0),
(12, 'Mie Sedap Rasa Sambal Goreng', 'Mie Instant', '', 275, 'images/sedap_sambal.jpg', 1500, 0),
(13, 'Supermi Rasa Ayam Bawang', 'Mie Instant', '', 460, 'images/supermi_ayam.jpg', 1400, 0),
(14, 'Indomie Goreng Rasa Cabe Ijo', 'Mie Instant', '', 500, 'images/indomie_ijo.jpg', 1650, 0),
(15, 'Indomie Rasa Empal Gentong', 'Mie Instant', '', 200, 'images/indomie_empal.jpg', 1600, 0),
(16, 'Sarimi Rasa Soto Koya Gurih', 'Mie Instant', '', 400, 'images/sarimi_soto.jpg', 1200, 0),
(17, 'Sarimi Rasa Ayam Bawang', 'Mie Instant', '', 300, 'images/sarimi_ayam.jpg', 1300, 0),
(18, 'Gaga Mie Goreng Extra Pedas 100', 'Mie Instant', '', 200, 'images/gaga_100.jpg', 1400, 0),
(19, 'Gaga Mie Gepeng Goreng Rasa Ayam Panggang', 'Mie Instant', '', 245, 'images/gaga_gepeng_panggang.jpg', 1550, 0),
(20, 'Gaga Mie Gepeng Rasa Ayam Bawang Pedas', 'Mie Instant', '', 238, 'images/gaga_gepeng_pedas.jpg', 1550, 0),
(21, 'Gaga Mie Gepeng Goreng Rasa Ayam Lada Hitam', 'Mie Instant', '', 140, 'images/gaga_gepeng_lada.jpg', 1550, 0),
(22, 'Gaga Mie Gepeng Rasa Ayam Lada Hitam', 'Mie Instant', '', 78, 'images/gaga_lada.jpg', 1550, 0);
