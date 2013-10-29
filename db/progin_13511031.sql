-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2013 at 03:52 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE IF NOT EXISTS `data_user` (
  `username` varchar(128) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `kota_kabupaten` varchar(20) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kodepos` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jumlah_transaksi` int(3) NOT NULL,
  `card_number` varchar(30) NOT NULL,
  `name_on_card` varchar(128) NOT NULL,
  `expired_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`username`, `nama_lengkap`, `nomor_hp`, `alamat`, `kota_kabupaten`, `provinsi`, `kodepos`, `email`, `password`, `jumlah_transaksi`, `card_number`, `name_on_card`, `expired_date`) VALUES
('Nama1', 'Nama Saya Ganteng', '087567544335', 'Jalan A No.2', 'Kota1', 'Prov1', '12345', 'ganteng.official@yahoo.com', '12345678', 0, '12345678', 'Nama Saya Ganteng', '2013-12-12'),
('ahiahiahi', 'ahi ahiahi', '123465656565', 'ajafljfl', 'adadg', 'prov banget', '12112', 'ahiahi_official@live.com', 'ahibanget', 0, '', '', '0000-00-00'),
('dkakda', 'kj /lkjk', 'jkljlkj', 'lkjl', 'jlkj', 'lkjlkj', 'klj', 'aldi_ginting@live.com', '11111111', 0, '', '', '0000-00-00'),
('saya1', 'saya oke banget', '12345678', 'jalan jalan', 'kabu', 'provbanget', '12121', 'kl@ajs.com', '00000000', 0, '', '', '0000-00-00'),
('beauty', 'beast banget aja', '8797897987', 'kjhjkhjk', 'hk', 'hjkhk', 'khjk', 'git@git.com', '11111111', 0, 'jsdfl', 'beast banget aja', '0000-00-00'),
('sahahahah', 'hjhj jhjj hjj', 'hjkh', 'khkjh', 'kjh', 'kjh', 'kh', 'kj@jk.sdfojfsj', 'pppppppp', 0, '', '', '0000-00-00'),
('gehahahaha', 'nvcn  ngfng', 'jkhjkh', 'jhkh', 'jhkhj', 'hjkhk', 'jhkj', 'dkin@hjhj.dfkjhgdktjh', '11111123', 0, '', '', '0000-00-00'),
('atndmtn', 'ljh ljhlh', 'ljh', 'lhl', 'hljjh', 'ljh', 'ljhl', 'storm@jui.jk', '09090909', 0, '', '', '0000-00-00'),
('juijui', 'jui jiu jiu', '1234567890', 'jhjhjhj', 'hjhj', 'h', 'jhjh', 'jhj@huihui@lui.lui', '12121212', 0, '', '', '0000-00-00'),
('yi7i7676', 'uiyiyi  98p', 'yiyiuy', 'yiyu', 'iyi', 'yi', 'yiuy', 'yiyiu@yuyuy.opop', '10101010', 0, '', '', '0000-00-00'),
('yi7i7676', 'uiyiyi  98p', 'yiyiuy', 'yiyu', 'iyi', 'yi', 'yiuy', 'yiyiu@yuyuy.opop', '10101010', 0, '', '', '0000-00-00'),
('', '', '', '', '', '', '', '', '', 0, '', '', '0000-00-00'),
('oeytoy', 'kuyku uykku', 'uykuyku', 'kyukuy', 'kuykuy', 'kuykuy', 'kuyku', 'aldi_ganten@live.soop', '00000000', 0, '', '', '0000-00-00'),
('ajaxamsterdam', 'nurwanto oke', 'kjlkj', 'lkjlkj', 'lkjlkj', 'lkjlkj', 'jlklk', 'nnn@iuihk.dfhkdjgjk', '12121212', 0, '', '', '0000-00-00'),
('hohihihi', ';lk;lk .k;lk', ';k;k;lk;', 'klk;', 'kuhkhk', 'hkjhjkh', 'jkhkj', 'kjhk@iyyiuy.9898', '90909090', 0, '809809890809', ';lk;lk .k;lk', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi`
--

CREATE TABLE IF NOT EXISTS `deskripsi` (
  `Id_barang` varchar(10) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Harga` varchar(50) NOT NULL,
  `Jumlah` varchar(10) NOT NULL,
  `Deskripsi` varchar(500) NOT NULL,
  `Kategori` varchar(15) NOT NULL,
  PRIMARY KEY (`Id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deskripsi`
--

INSERT INTO `deskripsi` (`Id_barang`, `Nama`, `Harga`, `Jumlah`, `Deskripsi`, `Kategori`) VALUES
('1', 'Sepatu1', 'Rp 500.000', '23', 'Sepatu asli, masih layak dipakai', 'Sepatu'),
('10', 'Sepatu10', 'Rp 123.098', '322', 'Sepatu beneran', 'Sepatu'),
('11', 'Lampu1', 'Rp 499.000', '54', 'Lampu terang', 'Lampu'),
('12', 'Lampu2', 'Rp 233.000', '43', 'Lmapu bagus', 'Lampu'),
('13', 'Lampu3', 'Rp 321.000', '87', 'Lampu putih', 'Lampu'),
('14', 'Lampu4', 'Rp 100.000', '87', 'Lampu mantap', 'Lampu'),
('15', 'Lampu5', 'Rp 34.000', '234', 'Lampu Murah', 'Lampu'),
('16', 'Lampu6', 'Rp 43.000', '124', 'Seru', 'Lampu'),
('17', 'Lampu7', 'Rp 53.000', '534', 'Tahan Lama', 'Lampu'),
('18', 'Lampu8', 'Rp 43.0000', '123', 'Harga bagus', 'Lampu'),
('19', 'Lampu9', 'Rp 56.000', '756', 'Stok baru', 'Lampu'),
('2', 'Sepatu2', 'Rp 499.000', '20', 'Sepatu layak pakai', 'Sepatu'),
('20', 'Lampu10', 'Rp 12.000', '745', 'Lampu kamar', 'Lampu'),
('21', 'Makanan1', 'Rp 12.000', '898', 'Stok terbatas', 'Makanan'),
('22', 'Makanan2', 'Rp 64.000', '32', 'Makanan Pagi', 'Makanan'),
('23', 'Makanan3', 'Rp 87.000', '86', 'Makanan berat', 'Makanan'),
('24', 'Makanan 4', 'Rp 32.000', '231', 'Makan Siang', 'Makanan'),
('25', 'Makanan5', 'Rp 53.000', '98', 'Makanan cihuy', 'Makanan'),
('26', 'Manakan6', 'Rp 10.000', '87576', 'Makan besar', 'Makanan'),
('27', 'Makanan7', 'Rp 31.000', '123', 'Makan enak', 'Makanan'),
('28', 'Makanan8', 'Rp 98.000', '3412', 'Makanan Traktiran', 'Makanan'),
('29', 'Makanan9', 'Rp 65.000', '46', 'Makanan sehat', 'Makanan'),
('3', 'Sepatu3', 'Rp 489.099', '19', 'Sangat baik untuk digunakan', 'Sepatu'),
('30', 'Makanan10', 'Rp 374.000', '2346', 'Makanan top', 'Makanan'),
('31', 'Mobil1', 'Rp 123.000.000', '1234', 'Mobil keren', 'Mobil'),
('32', 'Mobil2', 'Rp 231.000.000', '534', 'Mobil mewah', 'Mobil'),
('33', 'Mobil3', 'Rp 342.324.234', '8367932', 'Mobil obral', 'Mobil'),
('34', 'Mobil4', 'Rp 874.823.234', '86', 'Mobil Hemat', 'Mobil'),
('35', 'Mobil5', 'Rp 76.000.000', '875237182', 'Mobil bekas', 'Mobil'),
('36', 'Mobil6', 'Rp 78.984.873', '636', 'Mobil balap', 'Mobil'),
('37', 'Mobil7', 'Rp 34.000.003', '388', 'Mobil murah', 'Mobil'),
('38', 'Mobil8', 'Rp 87.000.789', '76', 'Mobil keluarga', 'Mobil'),
('39', 'Mobil9', 'Rp 231.123.421', '87', 'Mobil pintar', 'Mobil'),
('4', 'Sepatu4', 'Rp 489.099', '20', 'Sepatu hemat', 'Sepatu'),
('40', 'Mobil10', 'Rp 342.234.123', '334', 'Mobil baru', 'Mobil'),
('41', 'Printer1', 'Rp 234.123', '342', 'Printer hemat', 'Printer'),
('42', 'Printer2', 'Rp 343.123', '632', 'Printer asli', 'Printer'),
('43', 'Printer3', 'Rp 323.534', '87', 'Printer dijual', 'Printer'),
('44', 'Printer4', 'Rp 343.234', '31', 'Printer garansi', 'Printer'),
('45', 'Printer5', 'Rp 234.123', '3452', 'Printer tinta', 'Printer'),
('46', 'Printer6', 'Rp 523.234', '342', 'Printer kertas', 'Printer'),
('47', 'Printer7', 'Rp 422.233', '342', 'Printer murah', 'Printer'),
('48', 'Printer8', 'Rp 34.123', '23423', 'Printer Mainan', 'Printer'),
('49', 'Printer9', 'Rp 3.212.242', '24523', 'Printer Digital', 'Printer'),
('5', 'Sepatu5', 'Rp 444.444', '42', 'Sepatu murah', 'Sepatu'),
('50', 'Printer10', 'Rp 234.123', '452', 'Printer bekas', 'Printer'),
('6', 'Sepatu6', 'Rp 434.000', '20', 'Sepatu baru', 'Sepatu'),
('7', 'Sepatu8', 'Rp 230.000', '32', 'Sepatu Lama', 'Sepatu'),
('8', 'Sepatu8', 'Rp 109.000', '12', 'Sepatu Dijual', 'Sepatu'),
('9', 'Sepatu9', 'Rp 349.923', '34', 'Sepatu tidak dijual sembarangan', 'Sepatu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
