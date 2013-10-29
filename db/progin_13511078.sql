-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2013 at 09:27 PM
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
  `password` varchar(32) NOT NULL,
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
('rifki', 'kikikiki', 'Rifki Afina Putri', '0890980999', 'jalan mana aja', 'jawa barat', 'bandung...', 490940, 'rifki@fina-put.ri', '1378714_10201562960288197_1397267956_a.jpg', 0),
('identityope', 'opeopeope', 'Taufik Hidayat', '087825996141-1', 'jalan ganesha 10', 'jawa barat', 'Bandung', 40262, 'identityope@gmail.com', 'avatars-000051574937-7m4ugf-t200x200.jpg', 0),
('cgunardi', 'cehaceha', 'Christian Gunardi', '08997978820', 'Bandung', 'Jabar', 'Bandung', 14045, 'christian_gunardi@hotmail.com', '249767_10150220860949516_3545492_n.jpg', 5);

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
  `terjual` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `gambar`, `kategori`, `harga`, `jumlah`, `keterangan`, `terjual`) VALUES
(1, 'Beras 3 kg', 'images/beras.jpg', 'Makanan Pokok', 12000, 0, 'Beras super langsung dari sawah pilihan.', 2),
(2, 'Momogi Rasa Keju', 'images/momogikeju.jpg', 'Makanan Ringan', 1000, 100, 'Momogi rasa keju. Nagih abis lho.', 0),
(3, 'Momogi Rasa Jagung Bakar', 'images/momogijagung.jpg', 'Makanan Ringan', 1000, 100, 'Momogi rasa jagung bakar. Temennya momogi keju.', 0),
(4, 'Marimas', 'images/marimas.jpg', 'Minuman', 500, 35, 'Marimaaas~ aww! Minuman menyegarkan. Bukan telenovela.', 3),
(5, 'Fanta', 'images/fanta.jpg', 'Minuman', 500, 1, 'Minuman soda yang bisa bikin gembira.', 9),
(6, 'Bigcola', 'images/bigcola.jpg', 'Minuman', 3000, 8, 'Cola tapi big. Bigcola.', 1),
(7, 'Katel', 'images/katel.jpg', 'Alat Dapur', 5000, 27, 'Katel atau disebut juga wajan, adalah alat untuk memasak.', 1),
(8, 'Panci', 'images/panci.jpg', 'Alat Dapur', 8000, 12, 'Panci untuk masak yang berkuah-kuah. Warnanya juga pink unyu lucu gitu.', 0),
(9, 'Indomie', 'images/indomie.jpg', 'Makanan Siap Saji', 800, 99, 'Makanan favorit mahasiswa terutama anak-anak kosan. Lumayan kalau udah bosen pinter bisa dimakan setiap hari.', 1),
(10, 'Popmie', 'images/popmie.jpg', 'Makanan Siap Saji', 2000, 23, 'Saingannya indomie, lebih portable, bisa dibawa kemana-mana.', 0),
(11, 'Buku Binder', 'images/binder.jpg', 'Alat Kantor', 5000, 6, 'Buku binder buat nyatet.', 2),
(12, 'Baju Koko', 'images/bajukoko.jpg', 'Pakaian', 50000, 0, 'Baju keren buat cowok-cowok kece anak gaul masjid.', 4),
(13, 'Tahu', 'images/tahu.jpg', 'Makanan Pokok', 500, 95, 'Makanan yang terbuat dari kedelai. Temennya tempe.', 5),
(14, 'Tempe', 'images/tempe.jpg', 'Makanan Pokok', 800, 88, 'Makanan yang terbuat dari kedelai. Temennya tahu.', 52),
(15, 'Jaket', 'images/jaket.jpg', 'Pakaian', 80000, 12, 'Jaket trendy untuk menghangatkan tubuhmu.', 1),
(16, 'Kaos', 'images/kaos.jpg', 'Pakaian', 60000, 13, 'Kaos santai dengan berbagai pilihan warna dan ukuran.', 1),
(17, 'Kemeja', 'images/kemeja.jpg', 'Pakaian', 80000, 10, 'Kemeja rapi dan gaul.', 0),
(18, 'Nyam Nyam', 'images/nyamnyam.jpg', 'Makanan Ringan', 1500, 61, 'Jajanan masa kecil.', 9),
(19, 'Pulpen', 'images/pulpen.jpg', 'Alat Kantor', 2000, 50, 'Pulpen dengan tinta pilihan yang cocok untuk semua kertas.', 0),
(20, 'Tempat Pensil', 'images/tempatpensil.jpg', 'Alat Kantor', 10000, 60, 'Tempat untuk menaruh pensil dan alat tulis lainnya.', 0),
(21, 'Aqua', 'images/aqua.jpg', 'Minuman', 2500, 32, 'Air mineral dari mata air pilihan.', 3),
(22, 'Coca Cola', 'images/cocacola.jpg', 'Minuman', 8000, 71, 'Minuman soda berwarna coklat.', 2),
(23, 'Floridina', 'images/floridina.jpg', 'Minuman', 6000, 70, 'Minuman rasa jeruk dengan bulir jeruk asli.', 0),
(24, 'Fruit Tea', 'images/fruittea.jpg', 'Minuman', 6500, 70, 'Teh dengan aneka rasa buah-buahan.', 3),
(25, 'Mogu Mogu', 'images/mogumogu.jpg', 'Minuman', 5500, 48, 'Minuman manis aneka rasa.', 2),
(26, 'Nescafe', 'images/nescafe.jpg', 'Minuman', 4000, 55, 'Minuman yang setia menemani untuk begadang ngerjain tubes.', 0),
(27, 'Nu Milk Tea', 'images/numilktea.jpg', 'Minuman', 5000, 60, 'Teh susu.', 0),
(28, 'Okky Jelly Drink', 'images/okkyjelly.jpg', 'Minuman', 1000, 100, 'Minuman penunda lapar.', 0),
(29, 'Pocari Sweat', 'images/pocarisweat.jpg', 'Minuman', 7000, 78, 'Minuman elektrolit.', 2),
(30, 'Pop Ice', 'images/popice.jpg', 'Minuman', 500, 79, 'Pop ice blender seger.', 1),
(31, 'Sirup ABC', 'images/sirupabc.jpg', 'Minuman', 20000, 60, 'Sirup dengan berbagai pilihan rasa.', 0),
(32, 'Sirup Marjan', 'images/sirupmarjan.jpg', 'Minuman', 25000, 70, 'Temennya sirup ABC.', 0),
(33, 'Sprite', 'images/sprite.jpg', 'Minuman', 12000, 54, 'Soda bening pembawa kegembiraan.', 1),
(34, 'Teh Botol', 'images/tehbotol.jpg', 'Minuman', 3000, 80, 'Teh di dalam botol.', 0),
(35, 'Teh Gelas', 'images/tehgelas.jpg', 'Minuman', 1000, 80, 'Teh di dalam gelas.', 0),
(36, 'Teh Kotak', 'images/tehkotak.jpg', 'Minuman', 4000, 70, 'Teh di dalam kotak.', 0),
(37, 'Ultra Milk', 'images/ultramilk.jpg', 'Minuman', 5000, 69, 'Susu coklat di dalam kotak.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kartu_kredit`
--

CREATE TABLE IF NOT EXISTS `kartu_kredit` (
  `owner` varchar(20) NOT NULL,
  `card_number` char(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `expired` varchar(10) NOT NULL,
  PRIMARY KEY  (`card_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kartu_kredit`
--

INSERT INTO `kartu_kredit` (`owner`, `card_number`, `nama`, `expired`) VALUES
('cgunardi', '1234567890123456', 'Christian Gunardi', '2013-10-31'),
('rifki', '1290091827819281', 'Rifki Afina Putri', '20-20-2020'),
('identityope', '0192787263598712', 'Taufik Hidayat', '20-20-2020');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `username` varchar(30) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `tambahan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

