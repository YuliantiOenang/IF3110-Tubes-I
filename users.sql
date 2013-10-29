-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 29. Oktober 2013 jam 21:42
-- Versi Server: 5.5.27
-- Versi PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `foto`, `nama`, `harga`, `detail`, `jumlah`) VALUES
(1, 'foto\\daging\\ayam.jpg', 'ayam1', 20000, 'tidakada', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kotakab` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kodepos` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id`, `username`, `nama`, `alamat`, `kotakab`, `provinsi`, `kodepos`, `email`, `hp`, `password`) VALUES
(1, 'Innani', 'Innani Yudho', 'Jl Satelit', 'Probolinggo', 'Jawa TImur', '67273', 'inanyudho@gmail.com', '08970782729', 'innaniiiiii');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabbarang`
--

CREATE TABLE IF NOT EXISTS `tabbarang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data untuk tabel `tabbarang`
--

INSERT INTO `tabbarang` (`id`, `nama`, `harga`, `jumlah`, `deskripsi`, `foto`, `kategori`) VALUES
(1, 'ayam', 1000, 10, 'ayam segar', 'foto\\daging\\ayam.jpg', 'daging'),
(2, 'daging babi', 3000, 4, 'daging babi segar', 'foto\\daging\\babi.jpg', 'daging'),
(3, 'daging domba', 7000, 20, 'daging domba segar', 'foto\\daging\\domba.jpg', 'daging'),
(4, 'daging kambing', 3000, 15, 'daging kambing segar', 'foto\\daging\\kambing.jpg', 'daging'),
(5, 'daging kelinci', 2000, 30, 'daging kelinci segar', 'foto\\daging\\kelinci.jpg', 'daging'),
(6, 'daging sapi', 5000, 32, 'daging sapi segar', 'foto\\daging\\sapi.jpg', 'daging'),
(7, 'alpukat', 9000, 25, 'buah alupkat nikmat', 'foto\\buah\\alpukat.jpg', 'buah'),
(8, 'apel', 2900, 43, 'buah apel manis', 'foto\\buah\\apel.jpg', 'buah'),
(9, 'belimbing', 18000, 25, 'buah belimbing asam', 'foto\\buah\\belimbing.jpg', 'buah'),
(10, 'jeruk', 2400, 56, 'buah jeruk asli', 'foto\\buah\\jeruk.jpg', 'buah'),
(11, 'mangga', 3400, 27, 'buah mangga arum manis', 'foto\\buah\\mangga.jpg', 'buah'),
(12, 'pepaya', 3700, 78, 'buah pepaya manis', 'foto\\buah\\pepaya.jpg', 'buah'),
(13, 'pisang', 5600, 26, 'pisang ambon mantap', 'foto\\buah\\pisang.jpg', 'buah'),
(14, 'stroberi', 6800, 35, 'buah stroberi kecut manis', 'foto\\buah\\stroberi.jpg', 'buah'),
(15, 'andaliman', 7800, 15, 'andaliman bikin cetar', 'foto\\bumbu\\andaliman.jpg', 'bumbu'),
(16, 'asam jawa', 4000, 39, 'asam jawa asli', 'foto\\bumbu\\asamjawa.jpg', 'bumbu'),
(17, 'bawang merah', 7600, 39, 'bawang merah besar', 'foto\\bumbu\\bawangmerah.jpg', 'bumbu'),
(18, 'bawang putih', 5700, 32, 'bawang putih mengkilap', 'foto\\bumbu\\bawangputih.jpg', 'bumbu'),
(19, 'garam', 2100, 65, 'garam beryodium', 'foto\\bumbu\\garam.jpg', 'bumbu'),
(20, 'gula', 4800, 90, 'gula manis', 'foto\\bumbu\\gula.jpg', 'bumbu'),
(21, 'jintan', 3900, 65, 'jintan', 'foto\\bumbu\\jintan.jpg', 'bumbu'),
(22, 'kapulaga', 6500, 76, 'kapulaga berlaga', 'foto\\bumbu\\kapulaga.jpg', 'bumbu'),
(23, 'kayu manis', 4300, 43, 'kayu manis coklat', 'foto\\bumbu\\kayumanis.jpg', 'bumbu'),
(24, 'kencur', 6590, 19, 'kencur nikmat', 'foto\\bumbu\\kencur.jpg', 'bumbu'),
(25, 'kunyit', 7900, 56, 'kunyit kuning', 'foto\\bumbu\\kunyit.jpg', 'bumbu'),
(26, 'lada hitam', 8700, 42, 'black lada', 'foto\\bumbu\\ladahitam.jpg', 'bumbu'),
(27, 'merica', 7400, 38, 'merica putih', 'foto\\bumbu\\merica.jpg', 'bumbu'),
(28, 'ikan ayam-ayam', 20000, 28, 'ikan seperti rasa ayam', 'foto\\ikan\\ikanayamayam.jpg', 'ikan'),
(29, 'ikan asin', 30000, 53, 'ikan asin', 'foto\\ikan\\ikanasin.jpg', 'ikan'),
(30, 'ikan baronang', 24000, 31, 'ikan baronang', 'foto\\ikan\\ikanbaronang.jpg', 'ikan'),
(31, 'ikan bawal', 39000, 39, 'ikan bawal enak', 'foto\\ikan\\ikanbawal.jpg', 'ikan'),
(32, 'ikan gurame', 34000, 34, 'ikan gurame', 'foto\\ikan\\ikangurame.jpg', 'ikan'),
(33, 'ikan kerapu', 23000, 23, 'ikan kerapu', 'foto\\ikan\\ikankerapu.jpg', 'ikan'),
(34, 'ikan kuwe', 35000, 35, 'kuwe ikan kuwe', 'foto\\ikan\\ikankuwe.jpg', 'ikan'),
(35, 'ikan lele', 35000, 23, 'ikan lele di sungai', 'foto\\ikan\\ikanlele.jpg', 'ikan'),
(36, 'ikan mas', 34000, 23, 'ikan mas', 'foto\\ikan\\ikanmas.jpg', 'ikan'),
(37, 'ikan mujair', 43000, 42, 'ikan mujair di air', 'foto\\ikan\\ikanmujair.jpg', 'ikan'),
(38, 'ikan nila', 31000, 31, 'peranakan ikan mas', 'foto\\ikan\\ikannila.jpg', 'ikan'),
(39, 'ikan patin', 52000, 25, 'ikan patin', 'foto\\ikan\\ikanpatin.jpg', 'ikan'),
(40, 'ikan salmon', 70000, 70, 'ikan bergizi', 'foto\\ikan\\ikansalmon.jpg', 'ikan'),
(41, 'ikan tenggiri', 70000, 54, 'ikan mahal', 'foto\\ikan\\ikantenggiri.jpg', 'ikan'),
(42, 'ikan tuna', 55000, 34, 'ikan yang juga mahal', 'foto\\ikan\\ikantuna.jpg', 'ikan'),
(43, 'bayam', 3000, 76, 'sayur bayam hijau', 'foto\\sayur\\bayam.jpg', 'sayur'),
(44, 'brokoli', 7000, 13, 'brokoli', 'foto\\sayur\\brokoli.jpg', 'sayur'),
(45, 'buncis', 4500, 45, 'cocok untuk sup', 'foto\\sayur\\buncis.jpg', 'sayur'),
(46, 'kangkung', 4000, 61, 'sayur cah kangkung pedas', 'foto\\sayur\\kangkung.jpg', 'sayur'),
(47, 'kol', 2000, 25, 'kol', 'foto\\sayur\\kol.jpg', 'sayur'),
(48, 'sawi hijau', 4500, 89, 'sayur pahit tapi bergizi', 'foto\\sayur\\sawihijau.jpg', 'sayur'),
(49, 'sawi putih', 3700, 37, 'sawi putih tanpa rasa', 'foto\\sayur\\sawiputih.jpg', 'sayur'),
(50, 'tauge', 1000, 90, 'tauge toge', 'foto\\sayur\\toge.jpg', 'sayur');
