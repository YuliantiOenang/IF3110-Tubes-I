-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2013 at 01:13 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

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
  `id_barang` varchar(10) NOT NULL,
  `nama_barang` text NOT NULL,
  `url_gambar` text NOT NULL,
  `harga` double DEFAULT '0',
  `url_link` text NOT NULL,
  `detail` text NOT NULL,
  `stok` int(5) DEFAULT '0',
  `kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `url_gambar`, `harga`, `url_link`, `detail`, `stok`, `kategori`) VALUES
('BRG001', 'Beras', 'img/items/beras.jpg,img/items/beras_1.jpg,img/items/beras_2.jpg', 9000, '', 'Beras adalah bagian bulir padi (gabah) yang telah dipisah dari sekam. Sekam (Jawa merang) secara anatomi disebut ''palea'' (bagian yang ditutupi) dan ''lemma'' (bagian yang menutupi).', 10, 0),
('BRG002', 'Daging', 'img/items/daging.jpg', 20000, '', 'Daging ialah bagian lunak pada hewan yang terbungkus kulit dan melekat pada tulang yang menjadi bahan makanan. Daging tersusun sebagian besar dari jaringan otot, ditambah dengan lemak yang melekat padanya, urat, serta tulang rawan.', 10, 0),
('BRG003', 'Telur', 'img/items/telur.jpg', 1000, '', 'Dalam kebanyakan burung dan reptilia, telur adalah zigot yang dihasilkan melalui fertilisasi sel telur dan berfungsi memelihara dan menjaga embrio. Telur-telur reptilia dan burung diselimuti kerak pelindung, yang memiliki lubang yang sangat kecil agar hewan yang belum lahir tersebut dapat bernapas.', 100, 0),
('BRG004', 'Aqua', 'img/items/aqua.jpg', 2000, '', 'Aqua adalah sebuah merek air minum dalam kemasan (AMDK) yang diproduksi oleh PT Golden Mississippi Tbk di Indonesia sejak tahun 1973. Selain di Indonesia, Aqua juga dijual di Malaysia, Singapura, dan Brunei. Aqua adalah merek AMDK dengan penjualan terbesar di Indonesia dan merupakan salah satu merek AMDK yang paling terkenal di Indonesia, sehingga telah menjadi seperti merek generik untuk AMDK', 200, 1),
('BRG005', 'Sirup', 'img/items/sirup.jpg', 10000, '', 'Sirup (dari Bahasa Arab ???? sharab, minuman) adalah cairan yang kental dan memiliki kadar gula terlarut yang tinggi, namun hampir tidak memiliki kecenderungan untuk mengendapkan kristal.', 200, 1),
('BRG006', 'Bir', 'img/items/bir.jpg', 50000, '', 'Bir adalah segala minuman beralkohol yang diproduksi melalui proses fermentasi bahan berpati tanpa melalui proses penyulingan setelah fermentasi. Bir merupakan minuman beralkohol yang paling banyak dikonsumsi di dunia', 20, 1),
('BRG007', 'Bolpoin', 'img/items/pen.jpg', 2000, '', 'Pena (bahasa Inggris: pen) adalah alat tulis yang menggunakan tinta. Ada berbagai warna tinta pen, yang paling umum adalah biru, hitam, dan merah. Ada berbagai macam pena, di antaranya pulpen, pena bulu, dan spidol.', 200, 2),
('BRG008', 'Kertas', 'img/items/paper.jpg', 500, '', 'Kertas adalah bahan yang tipis dan rata, yang dihasilkan dengan kompresi serat yang berasal dari pulp. Serat yang digunakan biasanya adalah alami, dan mengandung selulosa dan hemiselulosa.', 1000, 2),
('BRG009', 'Penggaris', 'img/items/ruler.jpg', 1000, '', 'Penggaris adalah sebuah alat pengukur dan alat bantu gambar untuk menggambar garis lurus. Terdapat berbagai macam penggaris, dari mulai yang lurus sampai yang berbentuk segitiga (biasanya segitiga siku-siku sama kaki dan segitiga siku-siku 30°–60°). Penggaris dapat terbuat dari plastik, logam, berbentuk pita dan sebagainya. Juga terdapat penggaris yang dapat dilipat.', 200, 2),
('BRG010', 'Sapu', 'img/items/sapu.jpg', 5000, '', 'Sapu adalah salah satu alat pembersih yang terdiri dari bagian serat atau serabut kaku dan biasanya terpasang atau terikat kepada suatu pegangan silindris.', 3, 3),
('BRG011', 'Serokan', 'img/items/serokan.jpg', 20000, '', 'Hanya sebuah serokan', 10, 3),
('BRG012', 'Kemoceng', 'img/items/kemoceng.jpg', 10000, '', 'Kemoceng adalah salah satu alat pembersih yang terdiri dari bagian bulu-bulu dan biasanya terpasang atau terikat menjadi satu bagian bulat.', 5, 3),
('BRG013', 'Obat flu : Mixagrip', 'img/items/obatflu.jpg', 1000, '', 'MIXAGRIP merupakan obat flu yang dapat menghilangkan gejala-gejala pada penyakit flu, influenza, dan rhinitis alergi seperti demam, sakit kepala, hidung tersumbat, dan bersin-bersin.', 100, 4),
('BRG014', 'Kondom Sutra', 'img/items/kondom.jpg', 5000, '', 'Dirancang dengan teknologi super-tipis, kondom Sutra OK memberikan Anda pengalaman sentuhan langsung yang alami. Supaya lebih nikmat, tambahkan dua tetes Sutra Lubricant yang berbahan dasar air dibagian dalam kondom. \r\n\r\nKondom Sutra OK 100% lulus uji elektronis dan diproduksi sesuai dengan standar mutu international (ISO 4074) yang paling tinggi demi keamanan dan kenikmatan puncak. Bila digunakan secara benar, kondom akan mencegah kehamilan dan infeksi menular seksual, termasuk HIV/AIDS. ', 100, 4),
('BRG015', 'Obat nyamuk Baygon', 'img/items/baygon.jpg', 15000, '', 'Baygon adalah merek pestisida produksi S. C. Johnson & Son. Kegunaannya adalah sebagai pembasmi dan pengendali hama rumah tangga, seperti nyamuk, kecoa, lipan, dan semut. Merek ini sangat populer di Indonesia sehingga sudah menjadi nama generik bagi produk sejenis.', 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `username` varchar(15) NOT NULL,
  `field_card_num` varchar(10) NOT NULL,
  `card_name` text NOT NULL,
  `exdate` date NOT NULL,
  PRIMARY KEY (`field_card_num`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `field_card_num_2` (`field_card_num`),
  KEY `field_card_num` (`field_card_num`),
  KEY `field_card_num_3` (`field_card_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--


-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id_cart` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `jumlah` int(5) NOT NULL,
  PRIMARY KEY (`id_cart`),
  KEY `username` (`username`),
  KEY `id_barang` (`id_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `username`, `id_barang`, `jumlah`) VALUES
(1, 'azon04', 'BRG014', 2),
(2, 'azon04', 'BRG014', 2),
(3, 'azon04', 'BRG014', 1),
(4, 'azon04', 'BRG014', 1),
(5, 'azon04', 'BRG003', 5);

-- --------------------------------------------------------

--
-- Table structure for table `login_cache`
--

CREATE TABLE IF NOT EXISTS `login_cache` (
  `key` varchar(42) NOT NULL,
  `username` varchar(15) NOT NULL,
  `expdate` datetime NOT NULL,
  PRIMARY KEY (`key`),
  KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_cache`
--

INSERT INTO `login_cache` (`key`, `username`, `expdate`) VALUES
('e418ddc0bdf58306bc36e801dbc27d62d7670768', 'azon04', '2013-11-28 13:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `jumlah_transaksi` int(10) DEFAULT '0',
  `alamat` text,
  `provinsi` text,
  `kota` text,
  `kodepos` varchar(10) DEFAULT '',
  `nohp` varchar(12) DEFAULT '',
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username_2` (`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama_lengkap`, `email`, `jumlah_transaksi`, `alamat`, `provinsi`, `kota`, `kodepos`, `nohp`) VALUES
('azon04', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Ahmad Fauzan', 'azon04@gmail.com', 0, 'Jl. Pelesiran 61 Bandung', 'Jawa Barat', 'Bandung', '40116', '081996892112'),
('azon041', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Ahmad Fauzan', 'azon041@gmail.com', 0, 'p', 'p', '1111', '', '1'),
('fauzan04', 'a7d9d974e0e60524f1d89bbf49bfe8eed51bc2d7', 'Ahmad Fauzan', 'ahmad.fauzan@gmail.com', 0, 'Pelesiran', 'Jawa Barat', 'Bandung', '40116', '0819');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `card_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
