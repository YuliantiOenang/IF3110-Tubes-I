-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2013 at 11:20 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `toko_imba`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

CREATE TABLE IF NOT EXISTS `credit_card` (
  `id_credit_card` int(10) NOT NULL AUTO_INCREMENT,
  `credit_card_number` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `expired_date` date NOT NULL,
  PRIMARY KEY (`id_credit_card`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `inventori`
--

CREATE TABLE IF NOT EXISTS `inventori` (
  `id_inventori` int(10) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(10) NOT NULL,
  `nama_inventori` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `harga` int(10) NOT NULL,
  PRIMARY KEY (`id_inventori`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `inventori`
--

INSERT INTO `inventori` (`id_inventori`, `id_kategori`, `nama_inventori`, `jumlah`, `gambar`, `description`, `harga`) VALUES
(1, 1, 'Roti Buaya', 10, 'barang/Buaya.png', 'Roti buaya adalah hidangan Betawi berupa roti manis berbentuk buaya. Roti buaya senantiasa hadir dalam upacara pernikahan dan kenduri tradisional Betawi. Rasakan sensasi nyata Roti Buaya di lidah Anda!', 100000),
(2, 1, 'Roti Canai', 26, 'barang/Canai.png', 'Roti canai adalah sejenis roti pipih (flatbread) dengan pengaruh India, yang banyak ditemukan di Indonesia dan Malaysia. Roti ini sangat pipih karena dibuat dengan cara diputar hingga tipis, kemudian dilipat dan dipanggang dengan minyak, atau bisa pula dengan menebarkan adonan setipis mungkin di atas panggangan. Dihidangkan dengan kari kambing atau domba, roti canai akan melengkapi hari Anda dengan sempurna.', 30000),
(3, 1, 'Bolu Gulung', 19, '/barang/BolGul.png', 'Kue bolu yang dipanggang menggunakan loyang dangkal, diisi dengan selai   atau krim mentega kemudian digulung selagi masih panas sewaktu baru   diangkat dari oven untuk menjaga kelenturan sewaktu digulung dan tidak   patah. Gulungan bisa dibuka lagi kalau kue sudah agak dingin untuk diolesi   selai atau krim dari mentega dan setelah itu kue digulung kembali. Lengkapi waktu anda bersama keluarga dengan kudapan sehat nan nikmat ini.', 50000),
(4, 1, 'Muffin', 29, '/barang/Muffin.png', 'Kue khas negeri Inggris dan lahir pada zaman Victoria. Roti tradisional berbentuk gulungan, bundar dan tipis ini terbuat dari adonan roti yang diberi ragi. Paling enak kue manis ini dinikmati saat musim dingin dan disajikan bersama minuman hangat seperti teh atau kopi. Roti yang biasanya disobek dulu dan diberi olesan mentega kemudian dipanggang lagi ini sering diolesi diolesi dengan selai buah buatan sendiri untuk menambah citarasa. Dapatkan citarasa global ala dapur pribadi dalam sajian roti muffin kami!', 30000),
(5, 1, 'Baguette', 32, '/barang/FBread.png', 'Roti yang berasal dari Prancis ini adalah roti yang bentuknya lain dari roti lainnya yaitu panjang dan ukurannya yang besar, dan sangat renyah. Diameter standar baguette kami sekitar 5 atau 6 cm, dan panjang dapat mencapai 1 meter. Roti yang renyah di luar dan lembut didalam ini biasanya dipotong-potong terlebih dahulu sebelum disantap dengan berbagai pelengkap seperti mentega, keju, atau selai dan bahkan saus sphagetti. Dengan berat rata-rata 250 gram, roti ini tentu akan menyempurnakan makan pagi,siang, atau bahkan makan malam anda.', 60000),
(6, 1, 'Roti Jala', 35, '/barang/Jala.png', 'Roti yang merupakan makananan kegemaran di Malaysia dan juga di negara-negara ASEAN seperti namanya, berbentuk seperti jala. Cocok dimakan bersama kuah, bekas tempat memasak yang mempunyai beberapa lubang biasanya digunakan bagi menghasilkan roti jala yang dimasak di atas kuali leper. Roti Jala yang sering menjadi pilihan pada perayaan istimewa ini nikmat  dihidangkan dengan kari atau gulai ayam atau daging. Puaskan lidah anda dengan sensasi melayu nan kaya dengan roti jala ini.', 36000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(10) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'roti'),
(2, 'minuman'),
(3, 'kalengan'),
(4, 'segar'),
(5, 'peralatan');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(10) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomor_hp` int(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota_kabupaten` varchar(100) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `email`, `nomor_hp`, `alamat`, `provinsi`, `kota_kabupaten`, `kode_pos`) VALUES
(4, 'wkwk', 'aaa', 'aa', 'aa@aa.com', 12198, 'asaunu', 'asausah', 'asahsua', 1111);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(10) NOT NULL AUTO_INCREMENT,
  `id_pengguna` int(10) NOT NULL,
  `id_inventori` int(10) NOT NULL,
  `jumlah` int(100) NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_pengguna` (`id_pengguna`),
  KEY `id_inventori` (`id_inventori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventori`
--
ALTER TABLE `inventori`
  ADD CONSTRAINT `inventori_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_inventori`) REFERENCES `inventori` (`id_inventori`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
