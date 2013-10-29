-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2013 pada 07.09
-- Versi Server: 5.6.11
-- Versi PHP: 5.5.1

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
  `kategori` varchar(30) COLLATE utf8_bin NOT NULL,
  `namabarang` int(60) NOT NULL,
  `harga` int(10) NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `fullname` varchar(60) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(40) COLLATE utf8_bin NOT NULL,
  `kabupaten` varchar(20) COLLATE utf8_bin NOT NULL,
  `provinsi` varchar(20) COLLATE utf8_bin NOT NULL,
  `kodepos` int(10) NOT NULL,
  `telepon` int(15) NOT NULL,
  `nokartukredit` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `fullname`, `password`, `alamat`, `kabupaten`, `provinsi`, `kodepos`, `telepon`, `nokartukredit`) VALUES
('alianuraniputri', 'Alifa Nurani Putri', '123456', 'Griya Bandung Asri 2 blok i-2 10', 'Bandung', 'Jawa Barat', 40287, 2147483647, 2147483647);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
