-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2013 pada 15.57
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `tubesweb`
--
CREATE DATABASE IF NOT EXISTS `tubesweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `tubesweb`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) NOT NULL,
  `kategori` varchar(30) COLLATE utf8_bin NOT NULL,
  `namabarang` varchar(60) COLLATE utf8_bin NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(5) NOT NULL,
  `path` varchar(60) COLLATE utf8_bin NOT NULL,
  `keterangan` varchar(1000) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kategori`, `namabarang`, `harga`, `stok`, `path`, `keterangan`) VALUES
(0, 'beras', 'Merk My Rice 5kg', 56500, -36, 'images/gambarProduk/MYRICE.jpg', '- Packing tersedia : 5 Kg<br>- Materi packing : PP, rotogravure<br>- Varietas : IR64 (Setra Solo)<br>- Jenis : Long Grain, Non Aromatic<br>- Broken Level : 2 - 3%<br>- Kadar Air : 13,5-14,5%<br>- Asal Gabah : Jawa Tengah<br>- Karakteristik : Putih dan Pulen'),
(1, 'beras', 'Merk Gold Rice Merah (GRM) 5kg', 54500, 170, 'images/gambarProduk/GRM.jpg', ''),
(2, 'beras', 'Merk King Rice Merah (KRM) 5kg', 56000, 800, 'images/gambarProduk/KRM.jpg', ''),
(3, 'beras', 'Merk King Rice Hijau (KRH) 5kg', 52250, 700, 'images/gambarProduk/KRH.jpg', ''),
(4, 'beras', 'Merk Gold Rice Hijau (GRH) 5kg', 52250, 900, 'images/gambarProduk/GRH.jpg', ''),
(5, 'beras', 'Merk Guci Mas (GM) 5kg', 52500, 200, 'images/gambarProduk/Gucimas.jpg', ''),
(6, 'roti', 'Roti Sobek Choco Loaf', 15500, 5, 'images/gambarProduk/choco-loaf.jpg', ''),
(7, 'roti', 'Roti Sobek Cotton Melting Cheese', 19500, 600, 'images/gambarProduk/cotton-melting-cheese.jpg', ''),
(8, 'roti', 'Roti Manis Blueberry Delight', 5000, 700, 'images/gambarProduk/blueberry-delight.jpg', ''),
(9, 'roti', 'Roti Manis Burgundy Drops', 5500, 700, 'images/gambarProduk/burgundy-drops.jpg', ''),
(10, 'roti', 'Roti Tawar Cotton Wheat Kismis', 16500, 700, 'images/gambarProduk/cotton-wheat-kismis.jpg', ''),
(11, 'daging segar', 'Tanderloin 1kg', 90000, 800, 'images/gambarProduk/Tenderloin.jpg', ''),
(12, 'daging segar', 'Iga Sapi 1kg', 82000, 390, 'images/gambarProduk/iga.jpg', ''),
(13, 'daging segar', 'Hati Sapi 1kg', 65000, 600, 'images/gambarProduk/hati.jpg', ''),
(14, 'daging segar', 'Paru Sapi 1kg', 75000, 900, 'images/gambarProduk/Paru.jpg', ''),
(15, 'daging segar', 'Lidah Sapi 1kg', 75000, 700, 'images/gambarProduk/lidah.jpg', ''),
(16, 'daging olahan', 'Otak - Otak Bandeng Asli Tayu', 25000, 900, 'images/gambarProduk/otak2.jpg', ''),
(17, 'daging olahan', 'Siomay Kemasan Isi 25 dan 50 pcs', 75000, 800, 'images/gambarProduk/siomay.jpg', ''),
(18, 'daging olahan', 'Dendeng Ayam Panggang Pedas Titiles', 75000, 700, 'images/gambarProduk/dendeng.jpg', ''),
(19, 'daging olahan', 'Bakso Organic Master', 25000, 200, 'images/gambarProduk/bakso.jpg', ''),
(20, 'daging olahan', 'Nugget Organic Master', 20000, 190, 'images/gambarProduk/nugget.jpg', ''),
(21, 'buah', 'Anggur Green Thompson Seedless 1kg', 91000, 190, 'images/gambarProduk/thompson-340x340.jpg', ''),
(22, 'buah', 'Apel Fuji Premium 1kg', 68750, 200, 'images/gambarProduk/fuji-apel-340x340.jpg', ''),
(23, 'buah', 'Jeruk Navel Australia 1kg', 52500, 240, 'images/gambarProduk/jeruk-navel-australia-340x340.jpg', ''),
(24, 'buah', 'Pepaya California Sunpride 1kg', 17700, 700, 'images/gambarProduk/pepaya california-340x340.jpg', ''),
(25, 'buah', 'Melon Cantaloupe Jepang 1kg', 48000, 280, 'images/gambarProduk/canteloupe-340x340.jpg', ''),
(26, 'sayur', 'Bayam Hijau 200 gram', 4500, 360, 'images/gambarProduk/FA_0068-Bayam-copy-300x300.jpg', ''),
(27, 'sayur', 'Bayam Merah 200 gram', 4000, 320, 'images/gambarProduk/bayam-merah3.jpg', ''),
(28, 'sayur', 'Brokoli 250 gram', 8500, 400, 'images/gambarProduk/FA_0131brokoli-300x300.jpg', ''),
(29, 'sayur', 'Buncis Mini 250 gram', 11000, 210, 'images/gambarProduk/Buncis-Mini-300x282', ''),
(30, 'sayur', 'Daun Genjer 200 gram', 6000, 190, 'images/gambarProduk/dau-genjer-300x300.jpg', ''),
(31, 'sayur', 'Buncis 250 gram', 4500, 440, 'images/gambarProduk/FA_0071-Buncis-copy-300x300.jpg', ''),
(31, 'buah', 'Alpukat Mentega 1kg', 34400, 450, 'images/gambarProduk/alpukat.jpg', ''),
(32, 'buah', 'Strawberry (pack 250gr)', 15500, 430, 'images/gambarProduk/strawberries-340x340.jpg', ''),
(33, 'buah', 'Sirsak 1kg', 18800, 340, 'images/gambarProduk/sirsak-151x151.jpg', ''),
(34, 'buah', '  Salak Pondoh 1kg', 18000, 890, 'images/gambarProduk/salak-pondok-151x151.jpg', ''),
(35, 'buah', 'Pisang Cavendish Sunpride 1kg', 16500, 235, 'images/gambarProduk/pisang-cavendish-banana-151x151.jpg', ''),
(36, 'buah', 'Pisang Kepok', 18900, 321, 'images/gambarProduk/pisang-kepok-151x151.jpg', ''),
(37, 'buah', 'Pisang Raja Buluh', 22800, 234, 'images/gambarProduk/', ''),
(39, 'buah', 'Persimmon', 172500, 432, 'images/gambarProduk/fuyu-persimmons-151x151.jpg', ''),
(40, 'buah', 'Pepino 1kg', 18500, 345, 'images/gambarProduk/pepino-151x151.jpg', ''),
(38, 'sayur', 'Daun Kacang 1 ikat', 2700, 368, 'images/gambarProduk/daun-kacang-151x151.jpg', ''),
(41, 'sayur', 'Daun Katuk 1 ikat', 2900, 231, 'images/gambarProduk/daun-katuk-151x151.jpg', ''),
(42, 'sayur', 'Daun Ketumbar 100gram', 8700, 765, 'images/gambarProduk/', ''),
(43, 'sayur', 'Daun Melinjo 150gram', 3500, 876, 'images/gambarProduk/daun-melinjo-151x151.jpg', ''),
(44, 'sayur', 'Daun Singkong 1 ikat', 3200, 435, 'images/gambarProduk/daun-singkong-151x151.jpg', ''),
(45, 'sayur', 'Head Lettuce', 12000, 325, 'images/gambarProduk/lettuce_iceberg-151x151.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `usernameCustomer` varchar(60) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`serial`, `date`, `usernameCustomer`) VALUES
(1, '2013-10-29', 'alifanuranip'),
(2, '2013-10-29', 'alifanuranip'),
(3, '2013-10-29', 'alifanuranip'),
(4, '2013-10-29', 'alifanuranip');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `productName` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `kategori` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `productName`, `quantity`, `price`, `kategori`) VALUES
(10, 0, 'Merk My Rice 5kg', 45, 56500, 'beras'),
(10, 1, 'Merk Gold Rice Merah (GRM) 5kg', 30, 54500, 'beras'),
(10, 2, 'Merk King Rice Merah (KRM) 5kg', 25, 56000, 'beras'),
(10, 5, 'Merk Guci Mas (GM) 5kg', 1, 52500, 'beras'),
(11, 7, 'Roti Sobek Cotton Melting Cheese', 25, 19500, 'roti'),
(11, 10, 'Roti Tawar Cotton Wheat Kismis', 20, 16500, 'roti'),
(11, 9, 'Roti Manis Burgundy Drops', 10, 5500, 'roti'),
(14, 16, 'Otak - Otak Bandeng Asli Tayu', 16, 25000, 'daging olahan'),
(14, 19, 'Bakso Organic Master', 1, 25000, 'daging olahan'),
(14, 18, 'Dendeng Ayam Panggang Pedas Titiles', 10, 75000, 'daging olahan'),
(14, 20, 'Nugget Organic Master', 12, 20000, 'daging olahan'),
(14, 17, 'Siomay Kemasan Isi 25 dan 50 pcs', 1, 75000, 'daging olahan'),
(15, 11, 'Tanderloin 1kg', 1, 90000, 'daging segar'),
(15, 12, 'Iga Sapi 1kg', 1, 82000, 'daging segar'),
(15, 13, 'Hati Sapi 1kg', 1, 65000, 'daging segar'),
(15, 22, 'Apel Fuji Premium 1kg', 1, 68750, 'buah'),
(15, 23, 'Jeruk Navel Australia 1kg', 1, 52500, 'buah'),
(15, 25, 'Melon Cantaloupe Jepang 1kg', 1, 48000, 'buah'),
(15, 27, 'Bayam Merah 200 gram', 1, 4000, 'sayur'),
(15, 26, 'Bayam Hijau 200 gram', 1, 4500, 'sayur'),
(15, 28, 'Brokoli 250 gram', 1, 8500, 'sayur'),
(15, 31, 'Buncis 250 gram', 1, 4500, 'sayur'),
(1, 0, 'Merk My Rice 5kg', 1, 56500, 'beras'),
(1, 2, 'Merk King Rice Merah (KRM) 5kg', 1, 56000, 'beras'),
(1, 6, 'Roti Sobek Choco Loaf', 1, 15500, 'roti'),
(2, 0, 'Merk My Rice 5kg', 1, 56500, 'beras'),
(2, 2, 'Merk King Rice Merah (KRM) 5kg', 1, 56000, 'beras'),
(2, 6, 'Roti Sobek Choco Loaf', 1, 15500, 'roti'),
(3, 0, 'Merk My Rice 5kg', 1, 56500, 'beras'),
(3, 2, 'Merk King Rice Merah (KRM) 5kg', 1, 56000, 'beras'),
(3, 6, 'Roti Sobek Choco Loaf', 1, 15500, 'roti'),
(4, 11, 'Tanderloin 1kg', 1, 90000, 'daging segar'),
(4, 0, 'Merk My Rice 5kg', 1, 56500, 'beras'),
(4, 21, 'Anggur Green Thompson Seedless 1kg', 2, 91000, 'buah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `fullname` varchar(60) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(40) COLLATE utf8_bin NOT NULL,
  `kabupaten` varchar(20) COLLATE utf8_bin NOT NULL,
  `provinsi` varchar(20) COLLATE utf8_bin NOT NULL,
  `kodepos` varchar(10) COLLATE utf8_bin NOT NULL,
  `telepon` varchar(15) COLLATE utf8_bin NOT NULL,
  `nokartukredit` varchar(30) COLLATE utf8_bin NOT NULL,
  `namadikartu` varchar(60) COLLATE utf8_bin NOT NULL,
  `dateexp` date NOT NULL,
  `cookie_id` varchar(100) COLLATE utf8_bin NOT NULL,
  `cookie_expire` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `email`, `fullname`, `password`, `alamat`, `kabupaten`, `provinsi`, `kodepos`, `telepon`, `nokartukredit`, `namadikartu`, `dateexp`, `cookie_id`, `cookie_expire`) VALUES
('alifanurani', 'alifanuraniputri@gmail.com', '', '', '', '', '', '', '', '0123456789', 'alifa nurani', '2013-10-17', '', 0),
('dyahrahma', 'dyah@dyah.com', 'Dyah Rahmawati', 'dyahrahmawati', 'bdg', 'bdg', 'bdg', '33344', '0987665564443', '', '', '0000-00-00', '', 0),
('alifanuraniputri', 'a@itb.ac.id', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('aaaaa2', 'aaa@itb.ac.id', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('alifahaha', 'ad@itb.ac.id', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('aaaaa22', 'a@itb.ac.idd', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('aaaaa223', 'a2@itb.ac.idd', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('aaaaa221', 'a77@itb.ac.id', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('alifahaha1', 'a@itb.ac.idx', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('alifahah', 'adf@itb.ac.id', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('aaaaas', 'afff@itb.ac.id', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('alifa.nurani12', '13511012@std.stei.itb.aac.id', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('alifacoba', 'alifanp@gmail.co.id', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('alifacoba2', 'alifan2p@gmail.co.id', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('alifacoba23', 'alifan23p@gmail.co.id', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('alifacoba231', 'alifan231p@gmail.co.id', '', '', '', '', '', '', '', '0123456789', 'aku hoho', '2013-10-06', '', 0),
('alifanuraniputri3', 'al@itb.ac.idx', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('13511074', '135111012@std.stei.itb.aac.id', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('135110742', '1351110112@std.stei.itb.aac.id', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('1351107428', '13511101192@std.stei.itb.aac.id', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('alifanuranip', 'alifahahahaha@gmail.co.id', 'alifa nurani putri', 'milikalifa', 'alifa', '', '', '', '081910355420', '0123456789', 'alifa nurani', '2013-10-17', 'abad1df46e04253ca853796d5723c34c526fcab7ba1a04.82165235', 1385650103),
('namaku', 'namaku@gmail.com', 'alifa nurani putri', 'alifanurani', '', '', '', '999', '', '', '', '0000-00-00', '', 0),
('namaku2', 'namaku@gmail.co.id', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('namaku3', 'namak3u@gmail.com', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('namaku34', 'n4amaku@gmail.co.id', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('rahma2', 'dyah@dyah.co.xx', 'dyah rahma', 'dyahrahma', '', '', '', '', '', '8888888888', 'dyah rahma', '2013-10-12', '', 0),
('titoo', 'tito@a.mm', '', '', '', '', '', '', '', '0000000000', 'tito y', '2013-10-09', '', 0),
('titotito', 'tito@a.mx', '', '', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('innani', 'ina@in.com', 'ina haha', 'milikina', '', '', '', '', '', '', '', '0000-00-00', '9ccd8d3780d81ee70295e286d1a911f6526f4725940f31.33800558', 1385616421),
('innani2', 'ina@in.co.id', 'in kk', 'milikina', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('rahma3', 'rahma@hoho.com', 'Dyah Rahmawati', 'milikrahma', '', '', '', '', '', '', '', '0000-00-00', '', 0),
('dyahrahma1', 'dyah@dyah.co.ll', 'rahma hoho', 'milikrahma', '', '', '', '', '', '', '', '0000-00-00', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
